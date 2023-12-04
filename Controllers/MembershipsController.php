<?php
session_start();

require_once("Controller.php");
include_once "../Models/MembershipsModel.php";

class MembershipsController extends Controller
{
    public function addMembership()
    {
        $PackageID = $_POST["PackageID"];
        $Memberships = new Memberships();
        $result = $Memberships->addMembershipUserSide($PackageID);

        if ($result['alreadyThisMembershipExists']) {
            $_SESSION['alreadyThisMembershipExists'][$PackageID] = "You already subscribed to this package.";
            header("Location: ../views/packagebooking.php?AlreadySubscribedToThisPackage");
        } else if ($result['alreadyAnotherMembershipExists']) {
            $_SESSION['alreadyAnotherMembershipExists'][$PackageID] = "You are already subscribed to another package.";
            header("Location: ../views/packagebooking.php?AlreadySubscribedInAnotherPackage");
        } else if ($result['success']) {
            $_SESSION['membershipsuccess'][$PackageID] = "Membership Request added. Please Visit Gym For Payment to activate your account.";
            header("Location: ../views/packagebooking.php?RequestSuccessful");
        } else {
            $_SESSION['fail'][$PackageID] = "Membership reservation failed.";
            header("Location: ../views/packagebooking.php?fail");
        }
        exit();
    }

    public function freezeMembership()
    {
        $ClientID = $_SESSION["ID"];
        $freezeWeeks = $_POST["freezeWeeks"];

        // Fetch initial freeze info to check remaining freeze attempts
        $pck = new Package();
        $initialFreezeInfo = $pck->getPackageFreezeLimit($_SESSION['PackageID']);
        $remainingFreezeAttempts = $initialFreezeInfo - $_SESSION['FreezeCount'];

        if ($freezeWeeks >= 1 && $freezeWeeks <= $remainingFreezeAttempts) {
            // Update freeze count on the server
            $Memberships = new Memberships();
            $result = $Memberships->freezeMembership($ClientID, $freezeWeeks);

            if ($result['success']) {
                $_SESSION['freezeSuccess'][$ClientID] = "Membership frozen successfully.";
                header("Location: ../views/reqfreeze.php?FrozenSuccessfully");
            } else {
                $_SESSION['freezeFail'][$ClientID] = "Failed to freeze membership.";
                header("Location: ../views/reqfreeze.php?fail");
            }
        } else {
            $_SESSION['freezeFail'][$ClientID] = "Invalid freeze request.";
            header("Location: ../views/reqfreeze.php?InvalidRequest");
        }
        exit();
    }

    public function unfreezeClientMembership()
    {
        $membershipID = $_POST["membershipID"];
        $Memberships = new Memberships();
        $result = $Memberships->unFreezeMembership($membershipID);

        if ($result) {
            $membership = $Memberships->getMembershipByID($membershipID);
            $response = [
                'ID' => $membership->getID(),
                'FreezeCount' => $membership->getFreezeCount(),
                'EndDate' => $membership->getEndDate(),
            ];

            echo json_encode($response);
        } else {
            echo "failure";
        }
    }

}

$model = new Memberships();
$controller = new MembershipsController($model);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = isset($_POST["action"]) ? $_POST["action"] : "";

    switch ($action) {
        case "addMembership":
            $controller->addMembership();
            break;
        case "deleteMembership":
            if (isset($_POST["membershipID"])) {
                $membershipID = $_POST["membershipID"];
                $Memberships = new Memberships();
                $result = $Memberships->deleteMembership($membershipID);
                if ($result) {
                    echo "success";
                } else {
                    echo "failure";
                }
            }
            break;
        case "freezeMembership":
            $controller->freezeMembership();
            break;
        case "unfreezeClientMembership":
            $controller->unfreezeClientMembership();
            break;
        case "freezeClientMembership":
            if (isset($_POST["membershipID"]) && isset($_POST["selectedDate"])) {

                $membershipID = $_POST["membershipID"];
                $selectedDate = $_POST["selectedDate"];
                $Memberships = new Memberships();
                $result = $Memberships->freezeMembership($membershipID, $selectedDate);
                if ($result) {
                    $membership = $Memberships->getMembershipByID($membershipID);
                    $response = [
                        'ID' => $membership->getID(),
                        'FreezeCount' => $membership->getFreezeCount(),
                        'EndDate' => $membership->getEndDate(),
                    ];
                    echo json_encode($response);
                } else {
                    echo "failure";
                }
            }
            break;
        case "acceptMembership":
            $membershipID = $_POST['membershipID'];

            $membership = new Memberships();
            $result = $membership->acceptMembership($membershipID);

            if ($result) {
                echo "success";
            } else {
                echo "failure";
            }
            break;

        case "checkinClient":
            if (isset($_POST["clientID"])) {
                $clientID = $_POST["clientID"];
                $Memberships = new Memberships();
                $result = $Memberships->checkinClient($clientID);
                if ($result) {
                    echo "success";
                } else {
                    echo "failure";
                }
            }
            break;
        default:
            break;
    }
}
?>
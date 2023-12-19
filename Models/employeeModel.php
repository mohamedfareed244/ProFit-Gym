<?php

require_once("Model.php");
require_once("StaffModel.php");

ini_set('display_errors', 1);
error_reporting(E_ALL);

class Employee extends Staff
{

    public function __construct() {
        parent::__construct();
    }

    public function getAllEmployees()
    {
        $sql = "SELECT * FROM employee";
        $result = $this->db->query($sql);

        $employees = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $employee = new Employee();
                $employee['ID'] = $row['ID'];
                $employee['Name'] = $row['Name'];
                $employee['Email'] = $row['Email'];
                $employee['Password'] = $row['Password'];
                $employee['Salary'] = $row['Salary'];
                $employee['JobTitle'] = $row['JobTitle'];
                $employee['Address'] = $row['Address'];
                $employee['PhoneNumber'] = $row['PhoneNumber'];

                $employees[] = $employee;
            }
        }

        return $employees;
    }

    public function addEmployee($employee)
    {

        $name = $employee->Name;
        $Sal = $employee->Salary;
        $address = $employee->Address;
        $phoneNumber = $employee->PhoneNumber;
        $jobTitle = $employee->JobTitle;
        $Email = $employee->Email;
        $Password = $employee->Password;
        $Img = $employee->Img;

        $sql = "INSERT INTO employee (Name, Salary, Address, PhoneNumber, JobTitle, Email, Password,Img) 
                VALUES ('$name', '$Sal', '$address', '$phoneNumber', '$jobTitle','$Email', '$Password','$Img')";
        return $this->db->query($sql);
    }

    public function getEmployeeByID($employeeID)
    {
        $sql = "SELECT * FROM employee WHERE ID = '$employeeID'";
        $result = $this->db->query($sql);

        if ($result) {
            $employeeData = $this->db->fetchRow($result);
            $employee = new Employee();
            $employee['ID'] = $employeeData['ID'];
            $employee['Name'] = $employeeData['Name'];
            $employee['Email'] = $employeeData['Email'];
            $employee['Password'] = $employeeData['Password'];
            $employee['Salary'] = $employeeData['Salary'];
            $employee['JobTitle'] = $employeeData['JobTitle'];
            $employee['Address'] = $employeeData['Address'];
            $employee['PhoneNumber'] = $employeeData['PhoneNumber'];
            return $employee;
        } else {
            return null; 
            // No data found for the given employeeID
        }
    }


    public function updateEmployee($employee)
    {
        $Name = $employee->Name;
        $Address = $employee->Address;
        $PhoneNumber = $employee->PhoneNumber;
        $Email = $employee->Email;
        $Password = $employee->Password;
        $Image = $employee->Img;
        $employee_id = $_SESSION['ID'];;
    
        if (!empty($Password)) {
            $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);
            $sql = "UPDATE employee SET Name='$Name', Email='$Email', Password='$hashedPassword', PhoneNumber='$PhoneNumber', Address='$Address'";
            if (!empty($Image)) {
                $sql .= ", Img='$Image'";
            }
            $sql .= " WHERE ID = $employee_id";
            return $this->db->query($sql);
        } else {
            $sql = "UPDATE employee SET Name='$Name', Email='$Email', PhoneNumber='$PhoneNumber', Address='$Address'";
            if (!empty($Image)) {
                $sql .= ", Img='$Image'";
            }
            $sql .= " WHERE ID = $employee_id";
            return $this->db->query($sql);
        }
    }
    
    public function updateEmployeeAdmin($employee)
    {
        $employeeInfo = new Employee();
        $employeeInfo = $employeeInfo->getEmployeeByID($employee->ID);
    
        if (!empty($employee->Name)) {
            $employeeInfo->setName($employee->Name);
        }
    
        if (!empty($employee->Address)) {
            $employeeInfo->setAddress($employee->Address);
        }
    
        if (!empty($employee->PhoneNumber)) {
            $employeeInfo->setPhoneNumber($employee->PhoneNumber);
        }
    
        if (!empty($employee->Email)) {
            $employeeInfo->setEmail($employee->Email);
        }
    
        if (!empty($employee->Password)) {
            $hashedPassword = password_hash($employee->Password, PASSWORD_DEFAULT);
            $employeeInfo->setPassword($hashedPassword);
        }
    
        if (!empty($employee->Img)) {
            $employeeInfo->setImg($employee->Img);
        }
    
        $employeeID = $employee->ID;
        $name = $employeeInfo->getName();
        $address = $employeeInfo->getAddress();
        $phoneNumber = $employeeInfo->getPhoneNumber();
        $email = $employeeInfo->getEmail();
        $password = $employeeInfo->getPassword();
        $img = $employeeInfo->getImg();
    
        $sql = "UPDATE employee SET Name='$name', Address='$address', PhoneNumber='$phoneNumber', Email='$email', Password='$password'";
        
        if (!empty($img)) {
            $sql .= ", Img='$img'";
        }
    
        $sql .= " WHERE ID = $employeeID";
    
        $result = $this->db->query($sql);
        
        if ($result) {
            echo "Query executed successfully";
        } else {
        }
    
        return $result;
    }

    public function deleteEmployeeById($employeeID)
    {
        $sql = "DELETE from employee where ID =" . $employeeID;

        $result = $this->db->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function checkIfEmployeeExists($email)
    {
        $sql = "SELECT * FROM employee WHERE Email = '$email'";
        return $this->db->query($sql);
    }

    public function checkExistingEmail($email)
    {
        $Email = "SELECT * FROM employee WHERE Email = '$email'";

        $result = $this->db->query($Email);
        return mysqli_num_rows($result) > 0;
    }

    public function getAuthority()
    {
        $sql = "SELECT * FROM authority";

        $result = $this->db->query($sql);
        return $result;
    }
    
    public function getJobTitles()
    {

        $sql = "SELECT * FROM job_titles";
        $result = $this->db->query($sql);

        return $result;
    }

    public function get_emp_auth($id){
        $sql ="SELECT authority.Header,authority.FriendlyName,authority.LinkAddress FROM authority JOIN `employee authorities` as empauth on empauth.AuthorityID=authority.ID where empauth.JobTitleID =$id";
        $result = $this->db->query($sql);

        return $result;
    }

}

?>

<div class="sidebar close">
 
   
        <div class="logo-details">
        <i class='bx bx-user-circle'></i>
        <span class="logo-name">Welcome Back</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                <i class='bx bxs-grid-alt'></i>
                <span class="link-name">Profile</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a  class="link-name" href="#">Profile</a></li>
                </ul>
            </li>
            </li>
            <li>
                <div class="icon-link">
                   <a href="#">
                   <i class='fas fa-user-friends'></i>
                   <span class="link-name">Clients</span>
                   </a>
                   <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a  class="link-name" href="#">Clients</a></li>
                    <li><a href="#">Add</a></li>
                    <li><a href="#">Delete</a></li>
                    <li><a href="#">Details</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                <a href="#">
                <i class='fas fa-id-badge'></i>
                <span class="link-name">coaches</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a  class="link-name" href="#">coaches</a></li>
                    <li><a href="#">Classes</a></li>
                    <li><a href="#">Free pt sessions </a></li>
                    <li><a href="#">Pt clients </a></li>
                   
                </ul>
            </li>
            <li>
                <div class="icon-link">
                <a href="#">
                <i class='fas fa-id-badge'></i>
                <span class="link-name">Admin</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a  class="link-name" href="#">Admin </a></li>
                    <li><a href="#">Add Employees </a></li>
                   
                    <li><a href="#">sales report</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                <a href="#">
                <i class='fas fa-cog'></i>
                <span class="link-name">packages</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a  class="link-name" href="#">packages</a></li>
                    <li><a href="#">view membership packages </a></li>
                    <li><a href="#">Add membership packages </a></li>
                    <li><a href="#">delete membership packages </a></li>
                    <li><a href="#">view pt packages </a></li>
                    <li><a href="#">add pt packages </a></li>
                    <li><a href="#">delete pt packages </a></li>
                   
                </ul>
            </li>
            
            <li>
                <div class="icon-link">
                <a href="#">
                <i class='bx bxs-cog'></i>
                <span class="link-name">Account</span>
                </a>
                </div>
                <ul class="sub-menu blank">
                    <li><a  class="link-name" href="#">Account</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                <a href="#">
                <i class='bx bx-log-out'></i>
                <span class="link-name">Logout</span>
                </a>
                </div>
                <ul class="sub-menu blank">
                    <li><a  class="link-name" href="#">Logout</a></li>
                </ul>
            </li>

        </ul> 
        
</div>
        <section class="home-section">
                    <div class="home-content">
                      <i class='bx bx-menu'></i>
                    
                    </div>
                 </section>



    <script>
        let arrow=document.querySelectorAll(".arrow");
        for(var i=0;i<arrow.length;i++)
        {
            arrow[i].addEventListener("click",(e)=>{
                let arrowParent=e.target.parentElement.parentElement;
                arrowParent.classList.toggle("showMenu");

                console.log(arrowParent);

            });
        }

        let sidebar=document.querySelector(".sidebar");
        let sidebarBtn=document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click",()=>{
              sidebar.classList.toggle("close");
        });
        
        </script>
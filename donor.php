<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;450;500;600;900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/a865f27d9f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/donor.css">
    <title>Navigation Bar</title>
</head>

<body>
    <header class="site-header">
        <div class="wrapper site-header__wrapper">
            <div class="site-header__start">
                <img src="../images/logo.svg" alt="">
                <p>Heamo</p>
                <p>Donors</p>
            </div>
            <div class="site-header__middle">
                <nav class="nav">
                    <i class="nav__toggle fa-solid fa-bars fa-xl"></i>
                    <ul class="nav__wrapper">
                        <li class="nav__item"><a href="./index.html">Home</a></li>
                        <li class="nav__item"><a href="./donor.html">Find Donors</a></li>
                        <li class="nav__item"><a href="#blogs">Blog</a></li>
                        <li class="nav__item"><a href="#main">About us</a></li>
                        <li class="nav__item"><a href="#">Contact</a></li>
                        <li class="nav_btns">
                            <a href="./sign_in.html"><button type="button">Sign
                                    in</button></a>
                            <a href="./register.html"><button type="button">Register as a
                                    donor</button></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>



    <div class="donor">
        <h3 class="container-title my-4 text-center">Find Donor</h3>
        <p>find a suitable blood donor for you</p>
        <div class="search_box">
            <div class="search">
                <form role="search" id="form">
                    <input type="search" id="query" name="q" placeholder="Search by blood group, age...."
                        aria-label="Search through site content">
                    <button>
                        <svg viewBox="0 0 1024 1024">
                            <path class="path1"
                                d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z">
                            </path>
                        </svg>
                    </button>
                </form>
            </div>
            <div class="filter">
                <i class="fa-solid fa-filter"></i>
                <button> Filter</button>
                <div class="filter_box">
                    <ul>
                        <li>A+</li>
                        <li>B+</li>
                        <li>AB+</li>
                        <li>O+</li>
                    </ul>
                </div>
            </div>
        </div>
        <table>
            <thead>
                <tr class="headline">
                    <th scope="col">NAME</th>
                    <th scope="col">GENDER</th>
                    <th scope="col">DATE OF BIRTH</th>
                    <th scope="col">PHONE NUMBER</th>
                    <th scope="col">EMAIL ID</th>
                    <th scope="col">BLOOD GROUP</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="NAME">Saad</td>
                    <td data-label="GENDER">Male</td>
                    <td data-label="DATE OF BIRTH">24 October 2009</td>
                    <td data-label="PHONE NUMBER">+92 3165797806</td>
                    <td data-label="EMAIL ID">saadaslam@gmail.com</td>
                    <td data-label="BLOOD GROUP">
                        <p class="blood_group">B+</p>
                    </td>
                </tr>
                <tr>
                    <td data-label="NAME">Saad</td>
                    <td data-label="GENDER">Male</td>
                    <td data-label="DATE OF BIRTH">24 October 2009</td>
                    <td data-label="PHONE NUMBER">+92 3165797806</td>
                    <td data-label="EMAIL ID">saadaslam@gmail.com</td>
                    <td data-label="BLOOD GROUP">
                        <p class="blood_group">B+</p>
                    </td>
                </tr>
                <tr>
                    <td data-label="NAME">Saad</td>
                    <td data-label="GENDER">Male</td>
                    <td data-label="DATE OF BIRTH">24 October 2009</td>
                    <td data-label="PHONE NUMBER">+92 3165797806</td>
                    <td data-label="EMAIL ID">saadaslam@gmail.com</td>
                    <td data-label="BLOOD GROUP">
                        <p class="blood_group">B+</p>
                    </td>
                </tr>
                <tr>
                    <td data-label="NAME">Saad</td>
                    <td data-label="GENDER">Male</td>
                    <td data-label="DATE OF BIRTH">24 October 2009</td>
                    <td data-label="PHONE NUMBER">+92 3165797806</td>
                    <td data-label="EMAIL ID">saadaslam@gmail.com</td>
                    <td data-label="BLOOD GROUP">
                        <p class="blood_group">B+</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="next_page">
            <div class="next">
                <button>Next</button>
            </div>
            <div class="number">
                <i>1</i>
                <i>2</i>
                <i>3</i>
                <i>.</i>
                <i>.</i>
                <i>.</i>
            </div>
            <div class="previous">
                <button>previous</button>
            </div>
        </div>
    </div>






    <script>
        let navToggle = document.querySelector(".nav__toggle");
        let navWrapper = document.querySelector(".nav__wrapper");

        navToggle.addEventListener("click", function () {
            if (navWrapper.classList.contains("active")) {
                this.setAttribute("aria-expanded", "false");
                this.setAttribute("aria-label", "menu");
                navWrapper.classList.remove("active");
            } else {
                navWrapper.classList.add("active");
                this.setAttribute("aria-label", "close menu");
                this.setAttribute("aria-expanded", "true");
            }
        });

        let filter = document.querySelector(".filter");
        let filter_box = document.querySelector(".filter_box");
        console.log(filter);
        filter.addEventListener("click", function () {
            if (filter_box.style.display === "none")
                filter_box.style.display = "block";
            else
                filter_box.style.display = "none";
        });

    </script>
</body>

</html>
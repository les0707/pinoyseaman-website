<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Home</title>
</head>
<body>
    <header>
        <nav class="main-nav">
            <div class="nav-left">
                <div class="logo-container">
                    <a href="index.html" class="logo-link">
                        <img src="pinoyseaman-logo/pinoyseaman-logo.png" alt="pinoyseaman-logo" id="sidebar-logo">
                    </a>
                </div>
                <ul class="nav-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="job_search.html">Jobs</a></li>
                    <li><a href="#">Explore Companies</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="start.html" class="login-btn">Login</a></li>
                    <li><a href="start.html" class="signup-btn">Sign up</a></li>
                </ul>
            </div>

             <!-- Moved Buttons Inside nav-links -->
             <div class="buttons">
                <a href="start.html" class="login-btn">Login</a>
                <a href="start.html" class="signup-btn">Sign up</a>
            </div>
    
            <!-- Burger Menu Button -->
            <div class="burger-menu" onclick="toggleMenu()">
                &#9776; <!-- Unicode for the burger icon -->
            </div>
        </nav>
    </header>
    
<main>

    <section class="bg-container">
        <div class="top-section">
            <section>
                <figcaption class="motto">TRABAHONG SEAMAN, ISANG CLICK NALANG</figcaption>
            </section>
            <section class="container">
                    <div class="header-form">
                        <h1>Registration Form</h1>
                    </div>
                    <div>
                        <form>
                            <div class="user-card">
                                <div class="input-fname">
                                    <label for="firstname">Firstname</label>
                                    <input type="text" id="firstname" name="firstname" placeholder="Firstname">
                                </div>
                                <div class="input-lname">
                                    <label for="lastname">Lastname</label>
                                    <input type="text" id="lastname" name="lastname" placeholder="Lastname">
                                </div>
                            </div>
                            <div class="input-no">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" name="phone" placeholder="11 digits">
                            </div>
    
                            <div class="birth-card">
                                <label for="dob">Date of birth</label>
                                <div class="input-group">
                                    <select id="month" name="month">
                                        <option>January</option>
                                        <option>February</option>
                                        <option>March</option>
                                        <option>April</option>
                                        <option>May</option>
                                        <option>June</option>
                                        <option>July</option>
                                        <option>August</option>
                                        <option>September</option>
                                        <option>October</option>
                                        <option>November</option>
                                        <option>December</option>
                                    </select>
                                    <input type="number" id="day" name="day" placeholder="1" min="1" max="31">
                                    <input type="number" id="year" name="year" placeholder="2025" min="1900">
                                </div>
                            </div>
    
                            <div class="input-email">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="Email">
                            </div>
    
                            <div class="input-pws">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" placeholder="Password">
                            </div>
    
                            <div class="checkbox-container">
                                <input type="checkbox" id="employer" name="employer">
                                <label for="employer">Allow Employer to view my profile and include me on manual job search.</label>
                            </div>
    
                            <div class="btn-create">
                                <button class="create-btn" type="submit">Create Account</button>
                                <p>Already have an account? <a href="#">Log in</a></p>
                            </div>
                        </form>
                    </div>  
            </section>
        </div>
    </section>
    
    <section class="statics-section">
        <div class="statistics">
            <h2>Statistics</h2>
        </div>
        <div class="stats-container">
            <div class="stat-card">
                <div class="icon-title">
                    <i class="fa-solid fa-user"></i>
                    <h3>Registered Job-Seekers</h3>
                </div>
                <p>
                    Total: 
                    <?php
                    // Include the database connection file
                    include 'db.php';

                    // Query to count total users in the job_seeker table
                    $sql = "SELECT COUNT(*) AS total_users FROM job_seeker";
                    $result = $conn->query($sql);

                    if ($result && $row = $result->fetch_assoc()) {
                        echo number_format($row['total_users']);
                    } else {
                        echo "0"; // Display 0 if the query fails
                    }
                    ?>
                </p>
            </div>
            <div class="stat-card">
                <div class="icon-title">
                    <i class="fa-solid fa-building"></i>
                    <h3>Registered Company</h3>
                </div>
                <p>
                    Total: 
                    <?php
                    // Include the database connection file
                    include 'db.php';

                    // Query to count total users in the job_seeker table
                    $sql = "SELECT COUNT(*) AS total_employers FROM employer WHERE verify = 'y'";
                    $result = $conn->query($sql);

                    if ($result && $row = $result->fetch_assoc()) {
                        echo $row['total_employers'];
                    } else {
                        echo "0"; // Display 0 if the query fails
                    }
                    ?>
                </p>
            </div>
            <div class="stat-card">
                <div class="icon-title">
                    <i class="fa-solid fa-briefcase"></i>
                    <h3>Job Posted</h3>
                </div>
                <p>
                    Total: 
                    <?php
                    // Include the database connection file
                    include 'db.php';

                    // Query to count total jobs where expiry is not less than today's date
                    $sql = "SELECT COUNT(*) AS total_jobs FROM jobs WHERE expiry >= CURDATE()";
                    $result = $conn->query($sql);

                    if ($result && $row = $result->fetch_assoc()) {
                        echo $row['total_jobs'];
                    } else {
                        echo "0"; // Display 0 if the query fails
                    }
                    ?>
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="company-title-card">
            <h2>Companies</h2>
            <p>
                Join us and connect with top talent effortlessly. Post jobs, 
                find skilled crew members, and streamline your hiring process. 
                all in one place!
            </p>
        </div>
    
        <div class="slider-wrapper">
            <button id="prevBtn" class="slider-btn">&#10094;</button>
    
            <div class="company-container">
                <div class="company-track">
                    <div class="company-card">
                        <div class="employer-profile-container">
                            <img src="company-logo/wil.jpg" alt="Company image">
                        </div>
                        <div class="company-card-content">
                            <h3><strong>Deck Department</strong></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                 Quasi dignissimos porro praesentium debitis adipisci reprehenderit molestias, 
                                 itaque possimus quibusdam illum recusandae ipsam deserunt culpa. Reiciendis praesentium soluta unde 
                                 aliquam magni?</p>
                        </div>
                    </div>
    
                    <div class="company-card">
                        <div class="employer-profile-container">
                            <img src="company-logo/wil.jpg" alt="Company image">
                        </div>
                        <div class="company-card-content">
                            <h3><strong>Deck Department</strong></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                 Quasi dignissimos porro praesentium debitis adipisci reprehenderit molestias, 
                                 itaque possimus quibusdam illum recusandae ipsam deserunt culpa. Reiciendis praesentium soluta unde 
                                 aliquam magni?</p>
                        </div>
                    </div>
    
                    <div class="company-card">
                        <div class="employer-profile-container">
                            <img src="company-logo/wil.jpg" alt="Company image">
                        </div>
                        <div class="company-card-content">
                            <h3><strong>Deck Department</strong></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                 Quasi dignissimos porro praesentium debitis adipisci reprehenderit molestias, 
                                 itaque possimus quibusdam illum recusandae ipsam deserunt culpa. Reiciendis praesentium soluta unde 
                                 aliquam magni?</p>
                        </div>
                    </div>
    
                    <div class="company-card">
                        <div class="employer-profile-container">
                            <img src="company-logo/wil.jpg" alt="Company image">
                        </div>
                        <div class="company-card-content">
                            <h3><strong>Deck Department</strong></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, 
                                accusamus. Possimus, aliquam incidunt eaque delectus aperiam atque neque nemo laudantium aspernatur quos 
                                reprehenderit tempore, eum consectetur et expedita deserunt culpa?</p>
                        </div>
                    </div>
    
                    <div class="company-card">
                        <div class="employer-profile-container">
                            <img src="company-logo/wil.jpg" alt="Company image">
                        </div>
                        <div class="company-card-content">
                            <h3><strong>Deck Department</strong></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                 Quasi dignissimos porro praesentium debitis adipisci reprehenderit molestias, 
                                 itaque possimus quibusdam illum recusandae ipsam deserunt culpa. Reiciendis praesentium soluta unde 
                                 aliquam magni?</p>
                        </div>
                    </div>

                    <div class="company-card">
                        <div class="employer-profile-container">
                            <img src="company-logo/marsa.jpg" alt="Company image">
                        </div>
                        <div class="company-card-content">
                            <h3><strong>Deck Department</strong></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                 Quasi dignissimos porro praesentium debitis adipisci reprehenderit molestias, 
                                 itaque possimus quibusdam illum recusandae ipsam deserunt culpa. Reiciendis praesentium soluta unde 
                                 aliquam magni?</p>
                        </div>
                    </div>

                </div>
            </div>
            <button id="nextBtn" class="slider-btn">&#10095;</button>
        </div>
    </section>
    
    <section class="job-section">
        <div class="company-title-card">
            <h2>Urgent Seaman Job Hiring</h2>
        </div>
        <div class="urg-job-main-container">
            <section>
                <div class="urgent-jobs-container">
                    <div class="company-info">
                        <div class="company-jobs-img">
                            <img src="company-logo/scanmar_big.jpg" alt="SCANMAR">
                        </div>
                        <div class="company-jobs-content">
                            <h2>Tanker Vessel</h2>
                            <h3>Ast Shipping Company</h3>
                            <div class="tags">Chemical Tanker</div>
                        </div>
                    </div>
                    <div class="company-jobs-btn">
                        <button class="jobs-btn">Details & Apply</button>
                    </div>
                </div>
            </section>
            <section>
                <div class="urgent-jobs-container">
                    <div class="company-info">
                        <div class="company-jobs-img">
                            <img src="company-logo/scanmar_big.jpg" alt="SCANMAR">
                        </div>
                        <div class="company-jobs-content">
                            <h2>Tanker Vessel</h2>
                            <h3>Ast Shipping Company</h3>
                            <div class="tags">Chemical Tanker</div>
                        </div>
                    </div>
                    <div class="company-jobs-btn">
                        <button class="jobs-btn">Details & Apply</button>
                    </div>
                </div>
            </section>
            <section>
                <div class="urgent-jobs-container">
                    <div class="company-info">
                        <div class="company-jobs-img">
                            <img src="company-logo/scanmar_big.jpg" alt="SCANMAR">
                        </div>
                        <div class="company-jobs-content">
                            <h2>Tanker Vessel</h2>
                            <h3>Ast Shipping Company</h3>
                            <div class="tags">Chemical Tanker</div>
                        </div>
                    </div>
                    <div class="company-jobs-btn">
                        <button class="jobs-btn">Details & Apply</button>
                    </div>
                </div>
            </section>
            <section>
                <div class="urgent-jobs-container">
                    <div class="company-info">
                        <div class="company-jobs-img">
                            <img src="company-logo/scanmar_big.jpg" alt="SCANMAR">
                        </div>
                        <div class="company-jobs-content">
                            <h2>Tanker Vessel</h2>
                            <h3>Ast Shipping Company</h3>
                            <div class="tags">Chemical Tanker</div>
                        </div>
                    </div>
                    <div class="company-jobs-btn">
                        <button class="jobs-btn">Details & Apply</button>
                    </div>
                </div>
            </section>
            <section>
                <div class="urgent-jobs-container">
                    <div class="company-info">
                        <div class="company-jobs-img">
                            <img src="company-logo/scanmar_big.jpg" alt="SCANMAR">
                        </div>
                        <div class="company-jobs-content">
                            <h2>Tanker Vessel</h2>
                            <h3>Ast Shipping Company</h3>
                            <div class="tags">Chemical Tanker</div>
                        </div>
                    </div>
                    <div class="company-jobs-btn">
                        <button class="jobs-btn">Details & Apply</button>
                    </div>
                </div>
            </section>
        </div>
        <a href="job_search.html">Search all jobs <i class="fa-solid fa-arrow-right"></i></a>
    </section>

    <section class="ads-section">
        <div class="ads-container">
            <div class="ads-card"><a href=""><img src="company-ads/vship_logo.jpg" alt="ads"></a></div>
            <div class="ads-card"><a href=""><img src="company-ads/wallem_logo.jpg" alt="ads"></a></div>
            <div class="ads-card"><a href=""><img src="company-ads/status_big.jpg" alt="ads"></a></div>
            <div class="ads-card"><a href=""><img src="company-ads/marl.jpg" alt="ads"></a></div>
            <!-- Duplicate ads for a seamless effect -->
            <div class="ads-card"><a href=""><img src="company-ads/vship_logo.jpg" alt="ads"></a></div>
            <div class="ads-card"><a href=""><img src="company-ads/wallem_logo.jpg" alt="ads"></a></div>
            <div class="ads-card"><a href=""><img src="company-ads/status_big.jpg" alt="ads"></a></div>
            <div class="ads-card"><a href=""><img src="company-ads/marl.jpg" alt="ads"></a></div>
            <!-- Duplicate ads for a seamless effect -->
            <div class="ads-card"><a href=""><img src="company-ads/vship_logo.jpg" alt="ads"></a></div>
            <div class="ads-card"><a href=""><img src="company-ads/wallem_logo.jpg" alt="ads"></a></div>
            <div class="ads-card"><a href=""><img src="company-ads/status_big.jpg" alt="ads"></a></div>
            <div class="ads-card"><a href=""><img src="company-ads/marl.jpg" alt="ads"></a></div>
        </div>
    </section>

</main>

    <footer>
        <div class="footer-container">
            <div class="footer-section brand">
                <h2>Pinoy<span>Seaman</span></h2>
                <p>© 2023 pinoyseaman. All rights reserved.</p>
            </div>
            <div class="footer-section contact">
                <h3>Get in Touch</h3>
                <p>Emilia Str, Makati City</p>
                <p>filoseaman@gmail.com</p>
                <p>Phone number: (123) 456 78 90</p>
            </div>
            <div class="footer-section links">
                <h3>Learn More</h3>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Terms of Use</a></li>
                </ul>
            </div>
            <div class="footer-section links">
                <ul>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Advertise</a></li>
                </ul>
            </div>
        </div>
    </footer>   
    <script src="script/company-arrow.js"></script>
    <script src="script/nav-hover-effect.js"></script>
    <script src="script/ads-carousel.js"></script>
</body>
</html>
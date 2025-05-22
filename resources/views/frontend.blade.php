<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
        }

        .divider {
            border-top: 1px solid #e0e0e0;
            margin: 20px 0;
        }

        .quote-box {
            background-color: #f7f6f3;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }

        .content-box {
            background-color: white;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 15px;  /* reduced padding */
            margin-bottom: 15px;  /* reduced margin */
            transition: transform 0.2s;
            min-height: 100px;  /* set minimum height */
        }

        .content-box h5 {
            margin-bottom: 15px;  /* space between title and button */
        }

        .content-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .custom-btn {
            background-color: #f7f6f3;
            border: 1px solid #e0e0e0;
            color: #37352f;
            transition: all 0.3s;
            width: 100%;  /* Makes button full width */
            margin-top: 10px;  /* Adds some space above button */
        }

        .custom-btn:hover {
            background-color: #e0e0e0;
        }

        .header-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            margin-bottom: 30px;
        }

        .profile-section {
            text-align: center;
            margin-top: -60px;
        }
    </style>
</head>
<body>
    <div class="container-fluid p-0">
        <!-- Header Image -->
        <img src="header.jpg" alt="Header" class="header-image">

        <div class="container py-5">
            <!-- Profile Section -->
            <div class="row">
                <div class="col-md-12 profile-section">
                    <img src="pp.jpg" alt="Profile" class="profile-image">
                    <h4 class="mt-3">Davina's Logbook</h4>
                </div>
            </div>

            <div class="divider"></div>

            <!-- Quote Box -->
            <div class="quote-box">
                <p class="mb-0">"Try your best & let God do the rest."</p>
            </div>

            <div class="divider"></div>

            <!-- Content Boxes -->
            <div class="row">
                <!-- First Row -->
                <div class="col-md-4">
                    <div class="content-box">
                        <h5>Blog</h5>
                        <a href="{{ url('/blog') }}" class="btn custom-btn">See Result</a>
                    </div>
                </div>
               <div class="col-md-4">
                    <div class="content-box">
                        <h5>JavaScript</h5>
                        <a href="{{ url('/jsp') }}" class="btn custom-btn">See Result</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-box">
                        <h5>Layout</h5>
                        <a href="{{ url('/layout') }}" class="btn custom-btn">See Result</a>
                    </div>
                </div>

                <!-- Second Row -->
                <div class="col-md-4">
                    <div class="content-box">
                        <h5>Layout Revisi</h5>
                        <a href="{{ url('/layoutfinal') }}" class="btn custom-btn">See Result</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-box">
                        <h5>Validasi</h5>
                        <a href="{{ url('/validasi') }}" class="btn custom-btn">See Result</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-box">
                        <h5>ETS</h5>
                        <a href="{{ url('/index') }}" class="btn custom-btn">See Result</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

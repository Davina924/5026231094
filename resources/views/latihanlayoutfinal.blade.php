<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Bootstrap 4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        body {
            display: flex;
            background-color: #f8f9fa;
        }

        #sidebar {
            width: 250px;
            height: 100%;
            background: #0b4a84;
            color: white;
            transition: all 0.5s ease-in-out;
            position: fixed;
            left: -250px;
            top: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding-bottom: 50px;
        }

        /* Saat checkbox di-check, sidebar menutup */
        #sidebar-toggle:checked~#sidebar {
            left: 0;
        }

        /* Close sidebar button */
        .close-btn {
            display: none;
            cursor: pointer;
            font-size: 24px;
            margin: 24px;
            right: 24px;
            position: absolute;
        }

        /* Tampilkan close-btn jika sidebar terbuka */
        #sidebar-toggle:checked~#sidebar .close-btn {
            display: block;
        }

        .profile {
            display: flex;
            align-items: center;
            padding: 20px;
            margin-top: 50px;
        }

        .profile img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            margin-right: 10px;
            border-radius: 50%;
        }

        .profile .info {
            display: flex;
            flex-direction: column;
        }

        .profile .info span {
            font-size: 16px;
            font-weight: bold;
        }

        .profile .info .email {
            font-size: 14px;
            font-weight: 400;
            color: white;
        }

        ul {
            height: 10px;
            margin: 0;
            padding-left: 5px;
            padding-right: 5px;
            font-size: 15;
        }

        ul li {
            list-style: none;
        }

        ul li a {
            color: #0b4a84;
            font-weight: 400;
            padding: 5px 0px;
            text-transform: capitalize;
            text-decoration: none;
            display: block;
            border-radius: 10%;
            ;
        }

        ul li:hover {
            color: #0b4a84;
            background-color: #0d3a5b;
            margin-right: 15%;
        }

        ul li a i {
            padding-right: 5px;
            text-align: center;
            padding-bottom: 20px;
        }

        #content {
            flex: 1;
            transition: all 0.5s ease-in-out;
            width: 100%;
            font-weight: 500;
            position: relative;
        }

        /* Saat check box di-checked, content bergeser ke kanan */
        #sidebar-toggle:checked~#content {
            margin-left: 250px;
        }

        /* Open sidebar button */
        .open-btn {
            position: absolute;
            top: 15px;
            left: 15px;
            font-size: 24px;
            color: #0b4a84;
            cursor: pointer;

        }

        /* Sembunyikan open-btn saat sidebar terbuka */
        #sidebar-toggle:checked~#content .open-btn {
            display: none;
        }

        input[type="checkbox"] {
            display: none;
        }

        .header-bar {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 60px 20px 10px;
        }

        .logout-btn {
            width: 40%;
            margin: auto;
            padding: 10px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            margin-bottom: 55px;
        }

        .logout-btn:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .worker-card {
            display: flex;
            align-items: center;
            gap: 15px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 10px;
            text-align: left;
            margin-bottom: 15px;
        }

        .worker-card img {
            aspect-ratio: 3 / 4;
            width: 55%;
            max-width: 100px;
            min-width: none;
            border-radius: 10px;
            object-fit: cover;
        }

        .worker-info {
            flex: 1;
        }

        .worker-info h5 {
            margin: 0;
            font-size: 1rem;
            font-weight: bold;
        }

        .worker-info p {
            margin: 2px 0px;
            font-size: 0.85rem;
            color: gray;
        }

        .btn-primary {
            background-color: #1c4a81;
            border: none;
            font-weight: bold;
            font-size: 0.75rem;
            margin-top: 8px;
            width: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <input type="checkbox" id="sidebar-toggle">

    <div id="sidebar">
        <label for="sidebar-toggle" class="fa-solid fa-angles-left close-btn" style="color: #ffffff;"></label>
        <div>

            <div class="profile">
                <img src="imagelatlayout/pp.jpg" alt="User">
                <div class="info">
                    <span>User</span>
                    <span class="email">user@gmail.com</span>
                </div>
            </div>
            <ul class="list-unstyled">
                <li class="row align-items-center mb-2" style="margin-left: 40px;">
                  <div class="col-1 text-center">
                    <i class="fa-solid fa-clipboard-check" style="color: #f8f9fa;"></i>
                  </div>
                  <div class="col">
                    <a href="#" style="color: #f8f9fa; text-decoration: none;">Helperlog</a>
                  </div>
                </li>
              
                <li class="row align-items-center mb-2" style="margin-left: 40px;">
                  <div class="col-1 text-center">
                    <i class="fa-solid fa-magnifying-glass" style="color: #f8f9fa;"></i>
                  </div>
                  <div class="col">
                    <a href="#" style="color: #f8f9fa; text-decoration: none;">Helperfind</a>
                  </div>
                </li>
              
                <li class="row align-items-center" style="margin-left: 40px;">
                  <div class="col-1 text-center">
                    <i class="fa-regular fa-message" style="color: #f8f9fa;"></i>
                  </div>
                  <div class="col">
                    <a href="#" style="color: #f8f9fa; text-decoration: none;">Helperassist</a>
                  </div>
                </li>
              </ul>
              
        </div>
        <div class="logout-btn"><i class="fas fa-sign-out-alt"></i> Log Out</div>
    </div>
    <div id="content">
        <label for="sidebar-toggle" class="fas fa-bars open-btn"></label>
        <div class="header-bar">
            <h3 style="font-weight: bold; margin-bottom: 30px;">Helperfind Dashboard</h3>
            <p>Filter PRT Berdasarkan</p>
        </div>
        <div class="container-fluid mt-4">
            <div class="row">
                <!-- Kartu 1 -->
                <div class="col-md-4">
                    <div class="worker-card">
                        <img src="imagelatlayout/image-1.png" alt="Worker">
                        <div class="worker-info">
                            <h5>Intan Permata</h5>
                            <div class="row">
                                <div class="col-1 text-center"><i class="fa-regular fa-circle-user" style="color: #a990a8;"></i></div>
                                <div class="col-5"><p>Baby Sitter</p></div>
                            </div>
                            <div class="row">
                                <div class="col-1 text-center"><i class="fa-solid fa-location-dot" style="color: #a990a8;"></i></div>
                                <div class="col-5"><p>Surabaya</p></div>
                            </div>
                            <div class="row">
                                <div class="col-1 text-center"><i class="fa-regular fa-star" style="color: #a990a8;"></i></div>
                                <div class="col-5"><p>4.5/5.0</p></div>
                            </div>
                            <button class="btn btn-primary">Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <!-- Kartu 2 -->
                <div class="col-md-4">
                    <div class="worker-card">
                        <img src="imagelatlayout/image-6.png" alt="Worker">
                        <div class="worker-info">
                            <h5>Sumairi</h5>
                            <div class="row">
                                <div class="col-1 text-center"><i class="fa-regular fa-circle-user" style="color: #a990a8;"></i></div>
                                <div class="col-5"><p>Perawat Lansia</p></div>
                            </div>
                            <div class="row">
                                <div class="col-1 text-center"><i class="fa-solid fa-location-dot" style="color: #a990a8;"></i></div>
                                <div class="col-5"><p>Pasuruan</p></div>
                            </div>
                            <div class="row">
                                <div class="col-1"><p><i class="fa-regular fa-star" style="color: #a990a8;"></i></div>
                                <div class="col-5"><p>4.5/5.0</p></div>
                        </div>         
                            <button class="btn btn-primary">Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <!-- Kartu 3 -->
                <div class="col-md-4">
                    <div class="worker-card">
                        <img src="imagelatlayout/image-2.jpg" alt="Worker">
                        <div class="worker-info">
                            <h5>Rofiq</h5>
                            <div class="row">
                                <div class="col-1 text-center"><i class="fa-regular fa-circle-user" style="color: #a990a8;"></i></div>
                                <div class="col-5"><p>Sopir Pribadi</p></div>
                            </div>
                            <div class="row">
                                <div class="col-1 text-center"><i class="fa-solid fa-location-dot" style="color: #a990a8;"></i></div>
                                <div class="col-5"><p>Surabaya</p></div>
                            </div>
                            <div class="row">
                                <div class="col-1 text-center"><i class="fa-regular fa-star" style="color: #a990a8;"></i></div>
                                <div class="col-5"><p>4.5/5.0</p></div>
                            </div>
                            <button class="btn btn-primary">Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <!-- Kartu 4 -->
                <div class="col-md-4">
                    <div class="worker-card">
                        <img src="imagelatlayout/image-3.jpg" alt="Worker">
                        <div class="worker-info">
                            <h5>Nagisa Natsumi</h5>
                            <div class="row">
                                <div class="col-1 text-center"><i class="fa-regular fa-circle-user" style="color: #a990a8;"></i></div>
                                <div class="col-5"><p>PRT</p></div>
                            </div>
                            <div class="row">
                                <div class="col-1 text-center"><i class="fa-solid fa-location-dot" style="color: #a990a8;"></i></div>
                                <div class="col-5"><p>Surabaya</p></div>
                            </div>
                            <div class="row">
                                <div class="col-1 text-center"><i class="fa-regular fa-star" style="color: #a990a8;"></i></div>
                                <div class="col-5"><p>4.5/5.0</p></div>
                            </div>
                            <button class="btn btn-primary">Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <!-- Kartu 5 -->
                <div class="col-md-4">
                    <div class="worker-card">
                        <img src="imagelatlayout/image-4.jpg" alt="Worker">
                        <div class="worker-info">
                            <h5>Andri Wulan</h5>
                            <div class="row">
                                <div class="col-1 text-center"><i class="fa-regular fa-circle-user" style="color: #a990a8;"></i></div>
                                <div class="col-5"><p>PRT</p></div>
                            </div>
                            <div class="row">
                                <div class="col-1 text-center"><i class="fa-solid fa-location-dot" style="color: #a990a8;"></i></div>
                                <div class="col-5"><p>Tuban</p></div>
                            </div>
                            <div class="row">
                                <div class="col-1 text-center"><i class="fa-regular fa-star" style="color: #a990a8;"></i></div>
                                <div class="col-5"><p>4.5/5.0</p></div>
                            </div>
                            <button class="btn btn-primary">Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <!-- Kartu 6 -->
                <div class="col-md-4">
                    <div class="worker-card">
                        <img src="imagelatlayout/image-5.jpg" alt="Worker">
                        <div class="worker-info">
                            <h5>Roniah</h5>
                            <div class="row">
                                <div class="col-1 text-center"><i class="fa-regular fa-circle-user" style="color: #a990a8;"></i></div>
                                <div class="col-5"><p>Baby sitter</p></div>
                            </div>
                            <div class="row">
                                <div class="col-1 text-center"><i class="fa-solid fa-location-dot" style="color: #a990a8;"></i></div>
                                <div class="col-5"><p>Surabaya</p></div>
                            </div>
                            <div class="row">
                                <div class="col-1 text-center"><i class="fa-regular fa-star" style="color: #a990a8;"></i> </div>
                                <div class="col-5"><p>4.5/5.0</p></div>
                            </div>
                            <div class="row">
                                <div class="col-1 text-center"></div>
                                <div class="col-5"></div>
                            </div>
                            <button class="btn btn-primary">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
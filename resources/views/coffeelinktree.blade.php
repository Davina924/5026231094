<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vivian | Instagram</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="true">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="stylelinktree.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">


    <style>
        body {
            background-color: ;
            background-color: rgb(248, 245, 240);
            font-family: 'DM Sans', sans-serif;
            text-align: center;
            fill: rgb(75, 48, 48);
        }

        header {
            max-width: 584px;
            max-height: 64px;
            margin: auto;
            padding: 12px 16px;
            display: flex;
            justify-content: flex-end;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            transition: opacity 0.3s ease;
        }

        .share-button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #1A1A1A59;
            border: none;
            transform: translateX(4px);
        }

        .share-button svg {
            color: white;
            margin-bottom: 2px;

        }

        .container {
            width: 100%;
            max-width: 640px;
            margin: 0 auto;
            padding: 64px 24px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .toggle {
            width: 100%;
            height: 100vh;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile-wrapper {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .profilepic {
            width: 96px;
            height: 96px;
            border-radius: 50%;
            align-items: center;


        }

        .profilename {
            font-size: 20px;
            font-family: 'DM Sans', sans-serif;
            color: #4b3030;
            font-weight: 700;
            letter-spacing: -0.4px;
            line-height: 1.5;
            text-align: left;
            margin-top: 16px;
            margin-bottom: 2px;
            padding-left: 16px;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .profilename p {
            margin: 0;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            text-wrap: balance;
        }

        .profilebio {
            font-size: 16px;
            color: #4b3030;
            font-family: 'DM Sans', sans-serif;
            font-weight: 500;
            letter-spacing: 0.4px;
            text-align: center;
            text-wrap: balance;
        }

        .socmed {
            width: 32px;
            height: 32px;
            color: rgb(75, 48, 48);
            margin-bottom: 8px;
        }

        .social-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 11px;
        }

        .toggle-container {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .toggle-checkbox {
            display: none;
        }

        .links {
            font-weight: bold;
            font-size: 16px;
            transition: opacity 0.3s ease;
            position: relative;
            z-index: 1;
            font-family: 'DM Sans', sans-serif;
            margin-right: 35px;
            opacity: 1;
            color: black;
            letter-spacing: 0.32px line-height: 1.5;
        }

        .shop {
            font-weight: bold;
            font-size: 16px;
            transition: opacity 0.3s ease;
            position: relative;
            z-index: 1;
            font-family: 'DM Sans', sans-serif;
            margin-left: 20px;
            opacity: 1;
            color: white;
            letter-spacing: 0.32px;
            line-height: 1.5;
        }

        .toggle-label {
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            background-color: #959390;
            border-radius: 50px;
            padding: 10px 30px;
            position: relative;
            width: 191px;
            height: 51px;
            user-select: none;
        }

        .links,
        .shop {
            pointer-events: none;
        }

        .toggle-slider {
            position: absolute;
            top: 50%;
            left: 2px;
            right: 2px;
            width: 94px;
            height: 48px;
            background-color: white;
            border-radius: 50px;
            transition: transform 0.3s ease;
            transform: translateY(-50%);
            object-fit: cover;
        }

        .toggle-checkbox:checked+.toggle-label .toggle-slider {
            transform: translate(93px, -50%);
        }

        .toggle-checkbox:checked+.toggle-label .links {
            opacity: 1;
            color: rgb(244, 243, 243);
        }

        .toggle-checkbox:checked+.toggle-label .shop {
            opacity: 1;
            color: black;
        }

        .content {
            display: none;
        }

        .content.active {
            display: block;
        }

        .link-button-wrapper {
            position: relative;
            width: calc(100% - 12px);
            margin: 16px auto;
            display: flex;
            align-items: center;
            transform-origin: center;
            transition: all 0.2s ease;
        }

        .link-button {
            display: block;
            width: calc(100% - 12px);
            height: 100%;
            padding: 20px 28px;
            margin: 0 auto;
            background-color: rgb(248, 245, 240);
            border: 2px solid rgb(75, 48, 48);
            border-radius: 30px;
            box-shadow: rgb(75, 48, 48) 8px 8px 0px 0px;
            color: black;
            font-size: 18px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.2s ease;
            position: relative;
            text-align: left;
            z-index: 0;
            overflow: hidden;
            min-height: 72px;
            display: flex;
            align-items: center;
            font-family: 'DM Sans', sans-serif;
            font-size: 16px;
            font-weight: 500;
            line-height: 1.5;
            text-align: center;
            justify-content: center;
            display: flex;
            align-items: center;
            gap: 12px;
            padding-right: 48px;
            transform: none;
            padding-left: 48px;
            text-align: center;
            justify-content: center;
        }

        .link-button-wrapper:hover {
            transform: translate(4px, 4px);
        }

        .link-button-wrapper:hover .link-button {
            box-shadow: rgb(75, 48, 48) 4px 4px 0px 0px;
        }

        .link-button-wrapper:active {
            transform: translate(8px, 8px);
        }

        .link-button-wrapper:active .link-button {
            box-shadow: none;
        }

        .button-icon {
            position: absolute;
            left: 10px;
            width: 30px;
            height: 30px;
            color: rgb(75, 48, 48);
            font-size: 27px;
        }

        .three-dots-button {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            width: 24px;
            height: 24px;
            padding: 0;
            border: none;
            background: transparent;
            cursor: pointer;
            opacity: 0.5;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .three-dots-button:hover {
            opacity: 1;
            background: rgba(0, 0, 0, 0.1);
        }

        #content1 {
            width: 100%;
            padding: 8px 0;
        }

        .link-button.regular {
            padding-left: 28px;
        }

        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            width: calc(100% - 12px);
            margin: 12px auto;
        }

        .grid-item-wrapper {
            position: relative;
            width: 100%;
        }

        .grid-button {
            display: block;
            width: calc(100% - 12px);
            background-color: rgb(248, 245, 240);
            border: 2px solid rgb(75, 48, 48);
            border-radius: 14px;
            box-shadow: rgb(75, 48, 48) 8px 8px 0px 0px;
            overflow: hidden;
            transition: all 0.2s ease;
            text-decoration: none;
            margin: 0 auto;
            margin-bottom: 30px;
        }

        .grid-button img {
            width: 95%;
            aspect-ratio: 1;
            object-fit: cover;
            border-radius: 12px;
            margin: 8px 0;
        }

        .grid-button-content {
            padding: 12px 16px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            min-height: 48px;
        }

        .grid-button-text {
            color: rgb(0, 0, 0);
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            margin-right: 24px;
        }

        .grid-button .three-dots-button {
            position: static;
            transform: none;
            margin-bottom: 2px;
        }

        .grid-item-wrapper:hover .grid-button {
            transform: translate(4px, 4px);
            box-shadow: rgb(75, 48, 48) 4px 4px 0px 0px;
        }

        .grid-item-wrapper:active .grid-button {
            transform: translate(8px, 8px);
            box-shadow: none;
        }

        .youtube-button-wrapper {
            position: relative;
            width: calc(100% - 12px);
            margin: 16px auto;
            display: flex;
            align-items: center;
            transform-origin: center;
            transition: all 0.2s ease;
        }

        .youtube-button {
            display: block;
            width: calc(100% - 12px);
            background-color: rgb(248, 245, 240);
            border: 2px solid rgb(75, 48, 48);
            border-radius: 30px;
            box-shadow: rgb(75, 48, 48) 8px 8px 0px 0px;
            overflow: hidden;
            transition: all 0.2s ease;
            text-decoration: none;
            margin: 0 auto;
            padding: 6px 0;
        }

        .youtube-preview {
            width: calc(100% - 32px);
            position: relative;
            padding-top: 52%;
            background: #000;
            margin: 10px auto;
            border-radius: 5px;
            overflow: hidden;
        }

        .youtube-preview iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        .youtube-content {
            padding: 12px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .youtube-text {
            color: rgb(0, 0, 0);
            font-family: 'DM Sans', sans-serif;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            flex-grow: 1;
        }

        .youtube-button .three-dots-button {
            position: static;
            transform: none;
            opacity: 0.5;
        }

        .youtube-button-wrapper:hover {
            transform: translate(4px, 4px);
        }

        .youtube-button-wrapper:hover .youtube-button {
            box-shadow: rgb(75, 48, 48) 4px 4px 0px 0px;
        }

        .youtube-button-wrapper:active {
            transform: translate(8px, 8px);
        }

        .youtube-button-wrapper:active .youtube-button {
            box-shadow: none;
        }

        .youtube-subscribe-button {
            width: 107px;
            height: 27px;
            margin: 4px auto 12px;
            padding: 0 12px;
            background-color: #4a4948;
            border: none;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            cursor: pointer;
        }

        .youtube-subscribe-button i {
            color: #FFF;
            font-size: 12px;
        }

        .youtube-subscribe-button span {
            color: #FFF;
            font-family: 'DM Sans', sans-serif;
            font-size: 12px;
            font-weight: 700;
        }

        .product-button-wrapper {
            position: relative;
            width: calc(100% - 12px);
            margin: 16px auto;
            display: flex;
            display: flex;
            align-items: center;
            transform-origin: center;
            transition: all 0.2s ease;
        }

        .product-button {
            display: block;
            width: calc(100% - 12px);
            padding: 8px;
            margin: 0 auto;
            background-color: rgb(248, 245, 240);
            border: 2px solid rgb(75, 48, 48);
            border-radius: 30px;
            box-shadow: rgb(75, 48, 48) 8px 8px 0px 0px;
            overflow: hidden;
            transition: all 0.2s ease;
            text-decoration: none;
        }

        .product-images {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 8px;
            margin: 4px 8px 8px;
        }

        .product-image {
            width: 100%;
            aspect-ratio: 1;
            object-fit: cover;
            border-radius: 8px;
        }

        .product-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 20px;
        }

        .product-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4px;
            flex-grow: 1;
        }

        .product-title {
            color: rgb(75, 48, 48);
            font-family: 'DM Sans', sans-serif;
            font-size: 16px;
            font-weight: 600;
            text-align: center;
            margin-bottom: -8px;
        }

        .product-count {
            color: rgb(75, 48, 48);
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            font-weight: 500;
            opacity: 0.7;
            text-align: center;
        }

        .product-button .three-dots-button {
            position: static;
            transform: none;
            opacity: 0.5;
            margin-left: auto;
        }

        .product-button-wrapper:hover {
            transform: translate(4px, 4px);
        }

        .product-button-wrapper:hover .product-button {
            box-shadow: rgb(75, 48, 48) 4px 4px 0px 0px;
        }

        .product-button-wrapper:active {
            transform: translate(8px, 8px);
        }

        .product-button-wrapper:active .product-button {
            box-shadow: none;
        }

        #content2 {
            width: 100%;
            padding: 8px 24px;
            max-width: 640px;
            margin: 0 auto;
        }

        .image-link-button-wrapper {
            position: relative;
            width: calc(100% - 12px);
            margin: 16px auto;
            display: flex;
            align-items: center;
            transform-origin: center;
            transition: all 0.2s ease;
        }

        .image-link-button {
            display: block;
            width: calc(100% - 12px);
            background-color: rgb(248, 245, 240);
            border: none;
            border-radius: 30px;
            box-shadow: rgb(75, 48, 48) 8px 8px 0px 0px;
            overflow: hidden;
            transition: all 0.2s ease;
            text-decoration: none;
            margin: 0 auto;
            padding: 0;
            position: relative;
        }

        .image-link-image {
            width: 100%;
            aspect-ratio: 16/9;
            object-fit: cover;
            border-radius: 30px;
            margin: 0;
        }

        .image-link-footer {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            /* Changed from center to flex-end */
            padding: 16px 20px;
            background: linear-gradient(180deg,
                    rgba(0, 0, 0, 0) 0%,
                    rgba(0, 0, 0, 0.2) 25%,

                    rgba(0, 0, 0, 0.4) 50%,
                    rgba(0, 0, 0, 0.7) 100%);
            border-radius: 0 0 28px 28px;
            height: 50%;
            padding-bottom: 15px;
            /* Added more bottom padding */
        }

        .image-link-text {
            color: white;
            font-family: 'DM Sans', sans-serif;
            font-size: 16px;
            font-weight: 700;
            letter-spacing: 0.5px;
            margin-bottom: 0;
            /* Reset margin */
        }

        .image-link-button .three-dots-button {
            position: static;
            transform: none;
            opacity: 0.8;
            color: white;
        }

        .image-link-button-wrapper:hover {
            transform: translate(4px, 4px);
        }

        .image-link-button-wrapper:hover .image-link-button {
            box-shadow: rgb(75, 48, 48) 4px 4px 0px 0px;
        }

        .image-link-button-wrapper:active {
            transform: translate(8px, 8px);
        }

        .image-link-button-wrapper:active .image-link-button {
            box-shadow: none;
        }

        .linktree-button-wrapper {
            width: 100%;
            margin: 8px auto;
            margin-bottom: 12%;
            display: flex;
            justify-content: center;
        }

        .linktree-button {
            width: 271.41px;
            height: 48px;
            padding: 0 16px;
            background-color: white;
            border: none;
            border-radius: 24px;
            color: black;
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            text-decoration: none;
            box-shadow: 0 19px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            white-space: nowrap;
            overflow: hidden;
        }

        .linktree-button:hover {
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.15);
            transform: translateY(-1px);
        }

        .linktree-button svg {
            flex-shrink: 0;
        }

        .linktree-button p {
            margin: 0;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <header>
        <div class="mt-3">
            <button class="share-button">
                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path fill="white" stroke="white"
                        d="M12.6661 7.33348C12.2979 7.33348 11.9994 7.63195 11.9994 8.00014C11.9994 8.36833 12.2979 8.66681 12.6661 8.66681C13.0343 8.66681 13.3328 8.36833 13.3328 8.00014C13.3328 7.63195 13.0343 7.33348 12.6661 7.33348Z" />
                    <path fill="white" stroke="white"
                        d="M8.00057 7.33348C7.63238 7.33348 7.3339 7.63195 7.3339 8.00014C7.3339 8.36833 7.63238 8.66681 8.00057 8.66681C8.36876 8.66681 8.66724 8.36833 8.66724 8.00014C8.66724 7.63195 8.36876 7.33348 8.00057 7.33348Z" />
                    <path fill="white" stroke="white"
                        d="M3.33333 7.33348C2.96514 7.33348 2.66667 7.63195 2.66667 8.00014C2.66667 8.36833 2.96514 8.66681 3.33333 8.66681C3.70152 8.66681 4 8.36833 4 8.00014C4 7.63195 3.70152 7.33348 3.33333 7.33348Z" />
                </svg>
            </button>
        </div>
    </header>
    <div class="container">
        <div class="profile-wrapper">
            <div>
                <img src="https://ugc.production.linktr.ee/ff3ce58c-af42-4094-aecf-1be2c0cd71d4_121243474-785497558936237-4616786680976586521-n.jpeg?io=true&size=avatar-v3_0
                " class="profilepic">
            </div>
            <div class="d-flex">
                <div class="profilename">
                    <p>Vivian</p>
                </div>
                <div class="profilename">
                    <img width="16" height="16" src="https://img.icons8.com/fluency/48/verified-badge--v1.png"
                        alt="verified-badge--v1" />
                </div>
            </div>
            <div class="profilebio">
                <p>iced coffee forever</p>
            </div>
        </div>

        <div class="social-wrapper">
            <div class="d-flex align-items-center gap-3 mb-4">

                <a href="https://www.instagram.com/coffeebae97" target="_blank" class="socmed">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32" viewBox="0 0 50 50"
                        color: rgb(75, 48, 48);>
                        <path
                            d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 34 L 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z">
                        </path>
                    </svg>
                </a>

                <a href="https://x.com/coffeebae97" target="_blank" class="socmed">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 50 50" color: rgb(75,
                        48, 48);>
                        <path
                            d="M 5.9199219 6 L 20.582031 27.375 L 6.2304688 44 L 9.4101562 44 L 21.986328 29.421875 L 31.986328 44 L 44 44 L 28.681641 21.669922 L 42.199219 6 L 39.029297 6 L 27.275391 19.617188 L 17.933594 6 L 5.9199219 6 z M 9.7167969 8 L 16.880859 8 L 40.203125 42 L 33.039062 42 L 9.7167969 8 z">
                        </path>
                    </svg>
                </a>

                <a href="https://tiktok.com/@coffeebae97" target="_blank" class="socmed">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path
                            d="M9.37,23.5a7.468,7.468,0,0,1,0-14.936.537.537,0,0,1,.538.5v3.8a.542.542,0,0,1-.5.5,2.671,2.671,0,1,0,2.645,2.669.432.432,0,0,1,0-.05V1a.5.5,0,0,1,.5-.5h3.787a.5.5,0,0,1,.5.5A4.759,4.759,0,0,0,21.59,5.76a.5.5,0,0,1,.5.5L22.1,10a.533.533,0,0,1-.519.515,9.427,9.427,0,0,1-4.741-1.268v6.789A7.476,7.476,0,0,1,9.37,23.5ZM8.908,9.585a6.466,6.466,0,1,0,6.93,6.447V8.326a.5.5,0,0,1,.791-.407A8.441,8.441,0,0,0,21.1,9.5l-.006-2.76A5.761,5.761,0,0,1,15.859,1.5H13.051V16.032a.458.458,0,0,1,0,.053,3.672,3.672,0,1,1-4.14-3.695Z">
                        </path>
                    </svg>
                </a>

                <a href="https://coffeebae97.substack.com/" target="_blank" class="socmed">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path
                            d="M21 2.5v2H3v-2h18m0-1H3a1 1 0 00-1 1v2a1 1 0 001 1h18a1 1 0 001-1v-2a1 1 0 00-1-1zM21 7.523v2H3v-2h18m0-1H3a1 1 0 00-1 1v2a1 1 0 001 1h18a1 1 0 001-1v-2a1 1 0 00-1-1zM21 12.5v8.471l-8.199-3.585a2 2 0 00-1.602 0L3 20.971V12.5h18m0-1H3a1 1 0 00-1 1v8.471a.998.998,0 001.4.917l8.2-3.585a1 1 0 01.8 0l8.2 3.585a.998.998,0 001.4-.917V12.5a1 1 0 00-1-1z">
                        </path>
                    </svg>
                </a>

                <a href="mailto:coffeebae@underscoretalent.com" class="socmed">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" color: rgb(75,
                        48, 48);>
                        <path
                            d="M18.821,20.5H5.179A3.683,3.683,0,0,1,1.5,16.821V7.179A3.683,3.683,0,0,1,5.179,3.5H18.821A3.683,3.683,0,0,1,22.5,7.179v9.642A3.683,3.683,0,0,1,18.821,20.5ZM5.179,4.5A2.682,2.682,0,0,0,2.5,7.179v9.642A2.682,2.682,0,0,0,5.179,19.5H18.821A2.682,2.682,0,0,0,21.5,16.821V7.179A2.682,2.682,0,0,0,18.821,4.5Z" />
                        <path
                            d="M12,14.209a.5.5,0,0,1-.346-.138L4.286,7.028a.5.5,0,0,1,.691-.723L12,13.018l7.023-6.713a.5.5,0,1,1,.691.723l-7.368,7.043A.5.5,0,0,1,12,14.209Z" />
                        <path
                            d="M4.7,17.833a.5.5,0,0,1-.347-.86l5.54-5.31a.5.5,0,0,1,.692.722L5.048,17.694A.5.5,0,0,1,4.7,17.833Z" />
                        <path
                            d="M19.3,17.832a.5.5,0,0,1-.346-.139l-5.538-5.308a.5.5,0,0,1,.692-.722l5.538,5.308a.5.5,0,0,1-.346.861Z" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="toggle-container">
            <input type="checkbox" id="toggle" class="toggle-checkbox">
            <label for="toggle" class="toggle-label">
                <div class="links" id="links">Links</div>
                <div class="shop" id="shop">Shop</div>
                <span class="toggle-slider"></span>
            </label>
        </div>

        <div id="content1" class="content active">
            <div class="link-button-wrapper">
                <a href="https://www.amazon.com/dp/1797229508/ref=cm_sw_r_as_gl_api_gl_i_69HDCS0BP7PY86KJFWMM?linkCode=ml1&tag=coffeebae97-20"
                    class="image-link-button" target="_blank" rel="noopener noreferrer">
                    <img src="https://ugc.production.linktr.ee/e4b374e7-b785-4332-ae2c-2131ae2b427d_Screenshot-2024-07-23-at-9.46.19-AM.png?io=true&size=thumbnail-feature-v1_0"
                        alt="Coffee Setup" class="image-link-image">
                    <div class="image-link-footer">
                        <span class="image-link-text">Coffee Cards: 50 Recipes for a Better Brew Cards</span>
                        <button aria-label="Share link" class="three-dots-button">
                            <svg width="3" height="12" viewBox="0 0 3 12" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.5 12.0122C1.0875 12.0122 0.734375 11.8653 0.440625 11.5716C0.146875 11.2778 0 10.9247 0 10.5122C0 10.0997 0.146875 9.74658 0.440625 9.45283C0.734375 9.15908 1.0875 9.01221 1.5 9.01221C1.9125 9.01221 2.26562 9.15908 2.55938 9.45283C2.85313 9.74658 3 10.0997 3 10.5122C3 10.9247 2.85313 11.2778 2.55938 11.5716C2.26562 11.8653 1.9125 12.0122 1.5 12.0122ZM1.5 7.51221C1.0875 7.51221 0.734375 7.36533 0.440625 7.07158C0.146875 6.77783 0 6.42471 0 6.01221C0 5.59971 0.146875 5.24658 0.440625 4.95283C0.734375 4.65908 1.0875 4.51221 1.5 4.51221C1.9125 4.51221 2.26562 4.65908 2.55938 4.95283C2.85313 5.24658 3 5.59971 3 6.01221C3 6.42471 2.85313 6.77783 2.55938 7.07158C2.26562 7.36533 1.9125 7.51221 1.5 7.51221ZM1.5 3.01221C1.0875 3.01221 0.734375 2.86533 0.440625 2.57158C0.146875 2.27783 0 1.92471 0 1.51221C0 1.09971 0.146875 0.746582 0.440625 0.452832C0.734375 0.159082 1.0875 0.012207 1.5 0.012207C1.9125 0.012207 2.26562 0.159082 2.55938 0.452832C2.85313 0.746582 3 1.09971 3 1.51221C3 1.92471 2.85313 2.27783 2.55938 2.57158C2.26562 2.86533 1.9125 3.01221 1.5 3.01221Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                    </div>
                </a>
            </div>
            <div class="link-button-wrapper">
                <a href="https://www.amazon.com/shop/coffeebae97?ascsubtag=srctok-9babed69e926af30&btn_ref=srctok-9babed69e926af30"
                    class="link-button regular" target="_blank" rel="noopener noreferrer">
                    <span style="text-shadow: 0px 0 black, -0.2px 0 black;">AMAZON LINKS! (frother/ice
                        molds/rings)</span>
                </a>
                <button aria-label="Share link" class="three-dots-button">
                    <svg width="3" height="12" viewBox="0 0 3 12" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.5 12.0122C1.0875 12.0122 0.734375 11.8653 0.440625 11.5716C0.146875 11.2778 0 10.9247 0 10.5122C0 10.0997 0.146875 9.74658 0.440625 9.45283C0.734375 9.15908 1.0875 9.01221 1.5 9.01221C1.9125 9.01221 2.26562 9.15908 2.55938 9.45283C2.85313 9.74658 3 10.0997 3 10.5122C3 10.9247 2.85313 11.2778 2.55938 11.5716C2.26562 11.8653 1.9125 12.0122 1.5 12.0122ZM1.5 7.51221C1.0875 7.51221 0.734375 7.36533 0.440625 7.07158C0.146875 6.77783 0 6.42471 0 6.01221C0 5.59971 0.146875 5.24658 0.440625 4.95283C0.734375 4.65908 1.0875 4.51221 1.5 4.51221C1.9125 4.51221 2.26562 4.65908 2.55938 4.95283C2.85313 5.24658 3 5.59971 3 6.01221C3 6.42471 2.85313 6.77783 2.55938 7.07158C2.26562 7.36533 1.9125 7.51221 1.5 7.51221ZM1.5 3.01221C1.0875 3.01221 0.734375 2.86533 0.440625 2.57158C0.146875 2.27783 0 1.92471 0 1.51221C0 1.09971 0.146875 0.746582 0.440625 0.452832C0.734375 0.159082 1.0875 0.012207 1.5 0.012207C1.9125 0.012207 2.26562 0.159082 2.55938 0.452832C2.85313 0.746582 3 1.09971 3 1.51221C3 1.92471 2.85313 2.27783 2.55938 2.57158C2.26562 2.86533 1.9125 3.01221 1.5 3.01221Z"
                            fill="currentColor" />
                    </svg>
                </button>
            </div>

            <div class="link-button-wrapper">
                <a href="https://www.matchaeologist.com/?rfsn=4595305.14f410&utm_source=refersion&utm_medium=affiliate&utm_campaign=4595305.14f410"
                    class="link-button regular" target="_blank" rel="noopener noreferrer">
                    <span style="text-shadow: 0px 0 black, -0.2px 0 black;">Matcha</span>
                </a>
                <button aria-label="Share link" class="three-dots-button">
                    <svg width="3" height="12" viewBox="0 0 3 12" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.5 12.0122C1.0875 12.0122 0.734375 11.8653 0.440625 11.5716C0.146875 11.2778 0 10.9247 0 10.5122C0 10.0997 0.146875 9.74658 0.440625 9.45283C0.734375 9.15908 1.0875 9.01221 1.5 9.01221C1.9125 9.01221 2.26562 9.15908 2.55938 9.45283C2.85313 9.74658 3 10.0997 3 10.5122C3 10.9247 2.85313 11.2778 2.55938 11.5716C2.26562 11.8653 1.9125 12.0122 1.5 12.0122ZM1.5 7.51221C1.0875 7.51221 0.734375 7.36533 0.440625 7.07158C0.146875 6.77783 0 6.42471 0 6.01221C0 5.59971 0.146875 5.24658 0.440625 4.95283C0.734375 4.65908 1.0875 4.51221 1.5 4.51221C1.9125 4.51221 2.26562 4.65908 2.55938 4.95283C2.85313 5.24658 3 5.59971 3 6.01221C3 6.42471 2.85313 6.77783 2.55938 7.07158C2.26562 7.36533 1.9125 7.51221 1.5 7.51221ZM1.5 3.01221C1.0875 3.01221 0.734375 2.86533 0.440625 2.57158C0.146875 2.27783 0 1.92471 0 1.51221C0 1.09971 0.146875 0.746582 0.440625 0.452832C0.734375 0.159082 1.0875 0.012207 1.5 0.012207C1.9125 0.012207 2.26562 0.159082 2.55938 0.452832C2.85313 0.746582 3 1.09971 3 1.51221C3 1.92471 2.85313 2.27783 2.55938 2.57158C2.26562 2.86533 1.9125 3.01221 1.5 3.01221Z"
                            fill="currentColor" />
                    </svg>
                </button>
            </div>
            <div>
                <p style="font-weight: 700; margin-top: 35px;">featured</p>
            </div>
            <div class="grid-container">
                <div class="grid-item-wrapper">
                    <a href="https://www.tiktok.com/@coffeebae97/video/7231633615002537258" class="grid-button">
                        <img src="https://ugc.production.linktr.ee/aec92122-f985-4e10-82f8-19fc67b45f46_Screenshot-2024-03-04-at-00.05.40.png?io=true&size=thumbnail-stack-v1_0
                        " alt="My Coffee Setup">
                        <div class="grid-button-content">
                            <span class="grid-button-text" style="text-shadow: 0px 0 black, -0.2px 0 black;">my coffee
                                setup</span>
                            <button aria-label="Share link" class="three-dots-button">
                                <svg width="3" height="12" viewBox="0 0 3 12" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.5 12.0122C1.0875 12.0122 0.734375 11.8653 0.440625 11.5716C0.146875 11.2778 0 10.9247 0 10.5122C0 10.0997 0.146875 9.74658 0.440625 9.45283C0.734375 9.15908 1.0875 9.01221 1.5 9.01221C1.9125 9.01221 2.26562 9.15908 2.55938 9.45283C2.85313 9.74658 3 10.0997 3 10.5122C3 10.9247 2.85313 11.2778 2.55938 11.5716C2.26562 11.8653 1.9125 12.0122 1.5 12.0122ZM1.5 7.51221C1.0875 7.51221 0.734375 7.36533 0.440625 7.07158C0.146875 6.77783 0 6.42471 0 6.01221C0 5.59971 0.146875 5.24658 0.440625 4.95283C0.734375 4.65908 1.0875 4.51221 1.5 4.51221C1.9125 4.51221 2.26562 4.65908 2.55938 4.95283C2.85313 5.24658 3 5.59971 3 6.01221C3 6.42471 2.85313 6.77783 2.55938 7.07158C2.26562 7.36533 1.9125 7.51221 1.5 7.51221ZM1.5 3.01221C1.0875 3.01221 0.734375 2.86533 0.440625 2.57158C0.146875 2.27783 0 1.92471 0 1.51221C0 1.09971 0.146875 0.746582 0.440625 0.452832C0.734375 0.159082 1.0875 0.012207 1.5 0.012207C1.9125 0.012207 2.26562 0.159082 2.55938 0.452832C2.85313 0.746582 3 1.09971 3 1.51221C3 1.92471 2.85313 2.27783 2.55938 2.57158C2.26562 2.86533 1.9125 3.01221 1.5 3.01221Z"
                                        fill="currentColor" />
                                </svg>
                            </button>
                        </div>
                    </a>
                </div>

                <div class="grid-item-wrapper">
                    <a href="https://www.tiktok.com/@coffeebae97/video/7341146923459480878" class="grid-button">
                        <img src="https://ugc.production.linktr.ee/b8c38133-eb9a-43a4-ac0e-d694bba78f1f_Screenshot-2024-03-04-at-00.03.41.png?io=true&size=thumbnail-stack-v1_0
                        " alt="Vodka Infused">
                        <div class="grid-button-content">
                            <span class="grid-button-text" style="text-shadow: 0px 0 black, -0.2px 0 black;">vodka
                                infused nerd clusters</span>
                            <button aria-label="Share link" class="three-dots-button">
                                <svg width="3" height="12" viewBox="0 0 3 12" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.5 12.0122C1.0875 12.0122 0.734375 11.8653 0.440625 11.5716C0.146875 11.2778 0 10.9247 0 10.5122C0 10.0997 0.146875 9.74658 0.440625 9.45283C0.734375 9.15908 1.0875 9.01221 1.5 9.01221C1.9125 9.01221 2.26562 9.15908 2.55938 9.45283C2.85313 9.74658 3 10.0997 3 10.5122C3 10.9247 2.85313 11.2778 2.55938 11.5716C2.26562 11.8653 1.9125 12.0122 1.5 12.0122ZM1.5 7.51221C1.0875 7.51221 0.734375 7.36533 0.440625 7.07158C0.146875 6.77783 0 6.42471 0 6.01221C0 5.59971 0.146875 5.24658 0.440625 4.95283C0.734375 4.65908 1.0875 4.51221 1.5 4.51221C1.9125 4.51221 2.26562 4.65908 2.55938 4.95283C2.85313 5.24658 3 5.59971 3 6.01221C3 6.42471 2.85313 6.77783 2.55938 7.07158C2.26562 7.36533 1.9125 7.51221 1.5 7.51221ZM1.5 3.01221C1.0875 3.01221 0.734375 2.86533 0.440625 2.57158C0.146875 2.27783 0 1.92471 0 1.51221C0 1.09971 0.146875 0.746582 0.440625 0.452832C0.734375 0.159082 1.0875 0.012207 1.5 0.012207C1.9125 0.012207 2.26562 0.159082 2.55938 0.452832C2.85313 0.746582 3 1.09971 3 1.51221C3 1.92471 2.85313 2.27783 2.55938 2.57158C2.26562 2.86533 1.9125 3.01221 1.5 3.01221Z"
                                        fill="currentColor" />
                                </svg>
                            </button>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <p style="font-weight: 700;">find me everywhere</p>
            </div>
            <div class="link-button-wrapper">
                <a href="https://coffeebae97.substack.com/" target="_blank" class="link-button">
                    <i class="fa-regular fa-envelope button-icon" style="color: #000; "></i>
                    <span style="text-shadow: 0px 0 black, -0.2px 0 black;">Substack</span>
                </a>
                <button aria-label="Share link" class="three-dots-button">
                    <svg width="3" height="12" viewBox="0 0 3 12" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.5 12.0122C1.0875 12.0122 0.734375 11.8653 0.440625 11.5716C0.146875 11.2778 0 10.9247 0 10.5122C0 10.0997 0.146875 9.74658 0.440625 9.45283C0.734375 9.15908 1.0875 9.01221 1.5 9.01221C1.9125 9.01221 2.26562 9.15908 2.55938 9.45283C2.85313 9.74658 3 10.0997 3 10.5122C3 10.9247 2.85313 11.2778 2.55938 11.5716C2.26562 11.8653 1.9125 12.0122 1.5 12.0122ZM1.5 7.51221C1.0875 7.51221 0.734375 7.36533 0.440625 7.07158C0.146875 6.77783 0 6.42471 0 6.01221C0 5.59971 0.146875 5.24658 0.440625 4.95283C0.734375 4.65908 1.0875 4.51221 1.5 4.51221C1.9125 4.51221 2.26562 4.65908 2.55938 4.95283C2.85313 5.24658 3 5.59971 3 6.01221C3 6.42471 2.85313 6.77783 2.55938 7.07158C2.26562 7.36533 1.9125 7.51221 1.5 7.51221ZM1.5 3.01221C1.0875 3.01221 0.734375 2.86533 0.440625 2.57158C0.146875 2.27783 0 1.92471 0 1.51221C0 1.09971 0.146875 0.746582 0.440625 0.452832C0.734375 0.159082 1.0875 0.012207 1.5 0.012207C1.9125 0.012207 2.26562 0.159082 2.55938 0.452832C2.85313 0.746582 3 1.09971 3 1.51221C3 1.92471 2.85313 2.27783 2.55938 2.57158C2.26562 2.86533 1.9125 3.01221 1.5 3.01221Z"
                            fill="currentColor" />
                    </svg>
                </button>
            </div>

            <div class="link-button-wrapper">
                <a href="https://www.instagram.com/coffeebae97/" target="_blank" class="link-button">
                    <i class="fa-brands fa-instagram button-icon" style="color: #000;"></i>
                    <span style="text-shadow: 0px 0 black, -0.2px 0 black;">Instagram (coffeebae97)</span>
                </a>
                <button aria-label="Share link" class="three-dots-button">
                    <svg width="3" height="12" viewBox="0 0 3 12" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.5 12.0122C1.0875 12.0122 0.734375 11.8653 0.440625 11.5716C0.146875 11.2778 0 10.9247 0 10.5122C0 10.0997 0.146875 9.74658 0.440625 9.45283C0.734375 9.15908 1.0875 9.01221 1.5 9.01221C1.9125 9.01221 2.26562 9.15908 2.55938 9.45283C2.85313 9.74658 3 10.0997 3 10.5122C3 10.9247 2.85313 11.2778 2.55938 11.5716C2.26562 11.8653 1.9125 12.0122 1.5 12.0122ZM1.5 7.51221C1.0875 7.51221 0.734375 7.36533 0.440625 7.07158C0.146875 6.77783 0 6.42471 0 6.01221C0 5.59971 0.146875 5.24658 0.440625 4.95283C0.734375 4.65908 1.0875 4.51221 1.5 4.51221C1.9125 4.51221 2.26562 4.65908 2.55938 4.95283C2.85313 5.24658 3 5.59971 3 6.01221C3 6.42471 2.85313 6.77783 2.55938 7.07158C2.26562 7.36533 1.9125 7.51221 1.5 7.51221ZM1.5 3.01221C1.0875 3.01221 0.734375 2.86533 0.440625 2.57158C0.146875 2.27783 0 1.92471 0 1.51221C0 1.09971 0.146875 0.746582 0.440625 0.452832C0.734375 0.159082 1.0875 0.012207 1.5 0.012207C1.9125 0.012207 2.26562 0.159082 2.55938 0.452832C2.85313 0.746582 3 1.09971 3 1.51221C3 1.92471 2.85313 2.27783 2.55938 2.57158C2.26562 2.86533 1.9125 3.01221 1.5 3.01221Z"
                            fill="currentColor" />
                    </svg>
                </button>
            </div>

            <div class="youtube-button-wrapper">
                <a href="https://youtube.com/@coffeebae97" class="youtube-button">
                    <div class="youtube-preview">
                        <iframe src="https://www.youtube.com/embed/_nNhMrzsz8o" title="YouTube video" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="youtube-content">
                        <span class="youtube-text">Youtube (/coffeebae97)</span>
                        <button aria-label="Share link" class="three-dots-button">
                            <svg width="3" height="12" viewBox="0 0 3 12" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.5 12.0122C1.0875 12.0122 0.734375 11.8653 0.440625 11.5716C0.146875 11.2778 0 10.9247 0 10.5122C0 10.0997 0.146875 9.74658 0.440625 9.45283C0.734375 9.15908 1.0875 9.01221 1.5 9.01221C1.9125 9.01221 2.26562 9.15908 2.55938 9.45283C2.85313 9.74658 3 10.0997 3 10.5122C3 10.9247 2.85313 11.2778 2.55938 11.5716C2.26562 11.8653 1.9125 12.0122 1.5 12.0122ZM1.5 7.51221C1.0875 7.51221 0.734375 7.36533 0.440625 7.07158C0.146875 6.77783 0 6.42471 0 6.01221C0 5.59971 0.146875 5.24658 0.440625 4.95283C0.734375 4.65908 1.0875 4.51221 1.5 4.51221C1.9125 4.51221 2.26562 4.65908 2.55938 4.95283C2.85313 5.24658 3 5.59971 3 6.01221C3 6.42471 2.85313 6.77783 2.55938 7.07158C2.26562 7.36533 1.9125 7.51221 1.5 7.51221ZM1.5 3.01221C1.0875 3.01221 0.734375 2.86533 0.440625 2.57158C0.146875 2.27783 0 1.92471 0 1.51221C0 1.09971 0.146875 0.746582 0.440625 0.452832C0.734375 0.159082 1.0875 0.012207 1.5 0.012207C1.9125 0.012207 2.26562 0.159082 2.55938 0.452832C2.85313 0.746582 3 1.09971 3 1.51221C3 1.92471 2.85313 2.27783 2.55938 2.57158C2.26562 2.86533 1.9125 3.01221 1.5 3.01221Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                    </div>
                    <div class="youtube-subscribe-button">
                        <i class="fab fa-youtube"></i>
                        <span>Subscribe</span>
                    </div>
                </a>
            </div>

            <div class="link-button-wrapper">
                <a href="https://www.tiktok.com/@coffeebae97" target="_blank" class="link-button">
                    <i class="fa-brands fa-tiktok button-icon" style="color: #000;"></i>
                    <span style="text-shadow: 0px 0 black, -0.2px 0 black;">Tiktok (coffeebae97)</span>
                </a>
                <button aria-label="Share link" class="three-dots-button">
                    <svg width="3" height="12" viewBox="0 0 3 12" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.5 12.0122C1.0875 12.0122 0.734375 11.8653 0.440625 11.5716C0.146875 11.2778 0 10.9247 0 10.5122C0 10.0997 0.146875 9.74658 0.440625 9.45283C0.734375 9.15908 1.0875 9.01221 1.5 9.01221C1.9125 9.01221 2.26562 9.15908 2.55938 9.45283C2.85313 9.74658 3 10.0997 3 10.5122C3 10.9247 2.85313 11.2778 2.55938 11.5716C2.26562 11.8653 1.9125 12.0122 1.5 12.0122ZM1.5 7.51221C1.0875 7.51221 0.734375 7.36533 0.440625 7.07158C0.146875 6.77783 0 6.42471 0 6.01221C0 5.59971 0.146875 5.24658 0.440625 4.95283C0.734375 4.65908 1.0875 4.51221 1.5 4.51221C1.9125 4.51221 2.26562 4.65908 2.55938 4.95283C2.85313 5.24658 3 5.59971 3 6.01221C3 6.42471 2.85313 6.77783 2.55938 7.07158C2.26562 7.36533 1.9125 7.51221 1.5 7.51221ZM1.5 3.01221C1.0875 3.01221 0.734375 2.86533 0.440625 2.57158C0.146875 2.27783 0 1.92471 0 1.51221C0 1.09971 0.146875 0.746582 0.440625 0.452832C0.734375 0.159082 1.0875 0.012207 1.5 0.012207C1.9125 0.012207 2.26562 0.159082 2.55938 0.452832C2.85313 0.746582 3 1.09971 3 1.51221C3 1.92471 2.85313 2.27783 2.55938 2.57158C2.26562 2.86533 1.9125 3.01221 1.5 3.01221Z"
                            fill="currentColor" />
                    </svg>
                </button>
            </div>
        </div>


    </div>


    <div id="content2" class="content">
        <p style="margin-top: 10px; font-size: 14px; font-weight: 500;">Products may contain affiliate links</p>
        <div class="product-button-wrapper">
            <a href="https://tr.ee/MFuJUl" class="product-button">
                <div class="product-images">
                    <img src="https://ugc.production.linktr.ee/3712c3ce-a749-47ed-9da7-945ebca6f79b_51hLRr74V5L.-SL500-.jpeg?io=true&size=square-fit
                    " alt="Raspberry product 1" class="product-image">
                    <img src="https://ugc.production.linktr.ee/6ae2d034-4a5a-4a8d-ba59-ea2158cb0fea_GUEST-6ac27504-1221-423b-9c0f-3a8d9be24b86.jpeg?io=true&size=square-fit
                    " alt="Raspberry product 2" class="product-image">
                    <img src="https://ugc.production.linktr.ee/e80838f1-c410-40fe-9034-79a5f9081fbb_61MylJBNqXL.--AC-SX300-SY300-QL70-FMwebp-.webp?io=true&size=square-fit
                    " alt="Raspberry product 3" class="product-image">
                </div>
                <div class="product-content">
                    <div class="product-info">
                        <span class="product-title">Raspberry Cold Foam Matcha</span>
                        <span class="product-count">5 products</span>
                    </div>
                    <button aria-label="Share link" class="three-dots-button">
                        <svg width="3" height="12" viewBox="0 0 3 12" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.5 12.0122C1.0875 12.0122 0.734375 11.8653 0.440625 11.5716C0.146875 11.2778 0 10.9247 0 10.5122C0 10.0997 0.146875 9.74658 0.440625 9.45283C0.734375 9.15908 1.0875 9.01221 1.5 9.01221C1.9125 9.01221 2.26562 9.15908 2.55938 9.45283C2.85313 9.74658 3 10.0997 3 10.5122C3 10.9247 2.85313 11.2778 2.55938 11.5716C2.26562 11.8653 1.9125 12.0122 1.5 12.0122ZM1.5 7.51221C1.0875 7.51221 0.734375 7.36533 0.440625 7.07158C0.146875 6.77783 0 6.42471 0 6.01221C0 5.59971 0.146875 5.24658 0.440625 4.95283C0.734375 4.65908 1.0875 4.51221 1.5 4.51221C1.9125 4.51221 2.26562 4.65908 2.55938 4.95283C2.85313 5.24658 3 5.59971 3 6.01221C3 6.42471 2.85313 6.77783 2.55938 7.07158C2.26562 7.36533 1.9125 7.51221 1.5 7.51221ZM1.5 3.01221C1.0875 3.01221 0.734375 2.86533 0.440625 2.57158C0.146875 2.27783 0 1.92471 0 1.51221C0 1.09971 0.146875 0.746582 0.440625 0.452832C0.734375 0.159082 1.0875 0.012207 1.5 0.012207C1.9125 0.012207 2.26562 0.159082 2.55938 0.452832C2.85313 0.746582 3 1.09971 3 1.51221C3 1.92471 2.85313 2.27783 2.55938 2.57158C2.26562 2.86533 1.9125 3.01221 1.5 3.01221Z"
                                fill="currentColor" />
                        </svg>
                    </button>
                </div>
            </a>
        </div>
        <div class="product-button-wrapper">
            <a href="https://tr.ee/MFuJUl" class="product-button">
                <div class="product-images">

                    <img src="https://ugc.production.linktr.ee/6f5faf36-dd97-4f3b-8ad3-08b362b791ac_image.png?io=true&size=square-fit
                    " alt="Raspberry product 1" class="product-image" style="margin-left: 175px;">

                </div>
                <div class="product-content">
                    <div class="product-info">
                        <span class="product-title">Coffee Cards by Coffeebae</span>
                    </div>
                    <button aria-label="Share link" class="three-dots-button">
                        <svg width="3" height="12" viewBox="0 0 3 12" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.5 12.0122C1.0875 12.0122 0.734375 11.8653 0.440625 11.5716C0.146875 11.2778 0 10.9247 0 10.5122C0 10.0997 0.146875 9.74658 0.440625 9.45283C0.734375 9.15908 1.0875 9.01221 1.5 9.01221C1.9125 9.01221 2.26562 9.15908 2.55938 9.45283C2.85313 9.74658 3 10.0997 3 10.5122C3 10.9247 2.85313 11.2778 2.55938 11.5716C2.26562 11.8653 1.9125 12.0122 1.5 12.0122ZM1.5 7.51221C1.0875 7.51221 0.734375 7.36533 0.440625 7.07158C0.146875 6.77783 0 6.42471 0 6.01221C0 5.59971 0.146875 5.24658 0.440625 4.95283C0.734375 4.65908 1.0875 4.51221 1.5 4.51221C1.9125 4.51221 2.26562 4.65908 2.55938 4.95283C2.85313 5.24658 3 5.59971 3 6.01221C3 6.42471 2.85313 6.77783 2.55938 7.07158C2.26562 7.36533 1.9125 7.51221 1.5 7.51221ZM1.5 3.01221C1.0875 3.01221 0.734375 2.86533 0.440625 2.57158C0.146875 2.27783 0 1.92471 0 1.51221C0 1.09971 0.146875 0.746582 0.440625 0.452832C0.734375 0.159082 1.0875 0.012207 1.5 0.012207C1.9125 0.012207 2.26562 0.159082 2.55938 0.452832C2.85313 0.746582 3 1.09971 3 1.51221C3 1.92471 2.85313 2.27783 2.55938 2.57158C2.26562 2.86533 1.9125 3.01221 1.5 3.01221Z"
                                fill="currentColor" />
                        </svg>
                    </button>
                </div>
            </a>
        </div>
        <div class="product-button-wrapper">
            <a href="https://tr.ee/MFuJUl" class="product-button">
                <div class="product-images">
                    <img src="https://ugc.production.linktr.ee/d7ea2e4a-74b0-40e8-a387-ac7a4bc3ec2e_71BvCt6eAFL.--AC-SX300-SY300-QL70-FMwebp-.webp?io=true&size=square-fit
                    " alt="Raspberry product 1" class="product-image">
                    <img src="https://ugc.production.linktr.ee/72588182-3864-4a17-bb66-06992c99fa96_51ZIJani66L.--AC-SX300-SY300-QL70-FMwebp-.webp?io=true&size=square-fit
                    " alt="Raspberry product 2" class="product-image">
                    <img src="https://ugc.production.linktr.ee/14a603b6-32f8-4f13-855d-c25ae0374b4f_71g3rIrmEBL.--AC-SX300-SY300-QL70-FMwebp-.webp?io=true&size=square-fit
                    " alt="Raspberry product 3" class="product-image">
                </div>
                <div class="product-content">
                    <div class="product-info">
                        <span class="product-title">coffee bae essentials</span>
                        <span class="product-count">8 products</span>
                    </div>
                    <button aria-label="Share link" class="three-dots-button">
                        <svg width="3" height="12" viewBox="0 0 3 12" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.5 12.0122C1.0875 12.0122 0.734375 11.8653 0.440625 11.5716C0.146875 11.2778 0 10.9247 0 10.5122C0 10.0997 0.146875 9.74658 0.440625 9.45283C0.734375 9.15908 1.0875 9.01221 1.5 9.01221C1.9125 9.01221 2.26562 9.15908 2.55938 9.45283C2.85313 9.74658 3 10.0997 3 10.5122C3 10.9247 2.85313 11.2778 2.55938 11.5716C2.26562 11.8653 1.9125 12.0122 1.5 12.0122ZM1.5 7.51221C1.0875 7.51221 0.734375 7.36533 0.440625 7.07158C0.146875 6.77783 0 6.42471 0 6.01221C0 5.59971 0.146875 5.24658 0.440625 4.95283C0.734375 4.65908 1.0875 4.51221 1.5 4.51221C1.9125 4.51221 2.26562 4.65908 2.55938 4.95283C2.85313 5.24658 3 5.59971 3 6.01221C3 6.42471 2.85313 6.77783 2.55938 7.07158C2.26562 7.36533 1.9125 7.51221 1.5 7.51221ZM1.5 3.01221C1.0875 3.01221 0.734375 2.86533 0.440625 2.57158C0.146875 2.27783 0 1.92471 0 1.51221C0 1.09971 0.146875 0.746582 0.440625 0.452832C0.734375 0.159082 1.0875 0.012207 1.5 0.012207C1.9125 0.012207 2.26562 0.159082 2.55938 0.452832C2.85313 0.746582 3 1.09971 3 1.51221C3 1.92471 2.85313 2.27783 2.55938 2.57158C2.26562 2.86533 1.9125 3.01221 1.5 3.01221Z"
                                fill="currentColor" />
                        </svg>
                    </button>
                </div>
            </a>
        </div>
        <div class="product-button-wrapper">
            <a href="https://tr.ee/MFuJUl" class="product-button">
                <div class="product-images">
                    <img src="https://ugc.production.linktr.ee/1b4502eb-8dc5-4859-992e-7c890f4c8740_71xwAAXHJLL.--AC-SX300-SY300-QL70-FMwebp-.webp?io=true&size=square-fit

                    " alt="Raspberry product 1" class="product-image">
                    <img src="https://ugc.production.linktr.ee/b8cc105e-166f-4716-b834-116b5ccf6dfc_61uIoxUtfCL.--AC-SX300-SY300-QL70-FMwebp-.webp?io=true&size=square-fit
                    " alt="Raspberry product 2" class="product-image">
                    <img src="https://ugc.production.linktr.ee/2dbd8811-44b2-4630-85bc-d7d045d1b7ee_81JzotJV5SL.--AC-SY300-SX300-QL70-FMwebp-.webp?io=true&size=square-fit
                    " alt="Raspberry product 3" class="product-image">
                </div>
                <div class="product-content">
                    <div class="product-info">
                        <span class="product-title">glassware</span>
                        <span class="product-count">6 products</span>
                    </div>
                    <button aria-label="Share link" class="three-dots-button">
                        <svg width="3" height="12" viewBox="0 0 3 12" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.5 12.0122C1.0875 12.0122 0.734375 11.8653 0.440625 11.5716C0.146875 11.2778 0 10.9247 0 10.5122C0 10.0997 0.146875 9.74658 0.440625 9.45283C0.734375 9.15908 1.0875 9.01221 1.5 9.01221C1.9125 9.01221 2.26562 9.15908 2.55938 9.45283C2.85313 9.74658 3 10.0997 3 10.5122C3 10.9247 2.85313 11.2778 2.55938 11.5716C2.26562 11.8653 1.9125 12.0122 1.5 12.0122ZM1.5 7.51221C1.0875 7.51221 0.734375 7.36533 0.440625 7.07158C0.146875 6.77783 0 6.42471 0 6.01221C0 5.59971 0.146875 5.24658 0.440625 4.95283C0.734375 4.65908 1.0875 4.51221 1.5 4.51221C1.9125 4.51221 2.26562 4.65908 2.55938 4.95283C2.85313 5.24658 3 5.59971 3 6.01221C3 6.42471 2.85313 6.77783 2.55938 7.07158C2.26562 7.36533 1.9125 7.51221 1.5 7.51221ZM1.5 3.01221C1.0875 3.01221 0.734375 2.86533 0.440625 2.57158C0.146875 2.27783 0 1.92471 0 1.51221C0 1.09971 0.146875 0.746582 0.440625 0.452832C0.734375 0.159082 1.0875 0.012207 1.5 0.012207C1.9125 0.012207 2.26562 0.159082 2.55938 0.452832C2.85313 0.746582 3 1.09971 3 1.51221C3 1.92471 2.85313 2.27783 2.55938 2.57158C2.26562 2.86533 1.9125 3.01221 1.5 3.01221Z"
                                fill="currentColor" />
                        </svg>
                    </button>
                </div>
            </a>
        </div>
        <div class="product-button-wrapper">
            <a href="https://tr.ee/MFuJUl" class="product-button">
                <div class="product-images">
                    <img src="https://ugc.production.linktr.ee/2ab5274c-167a-4f62-82ef-9cef62e3eca7_61qRyPA528L.--AC-SX300-SY300-QL70-FMwebp-.webp?io=true&size=square-fit
                    " alt="Raspberry product 1" class="product-image">
                    <img src="https://ugc.production.linktr.ee/a9926d89-3bb3-4ceb-9f1e-b7dfed488283_81wrTg90J8L.--AC-SX300-SY300-QL70-FMwebp-.webp?io=true&size=square-fit
                    " alt="Raspberry product 2" class="product-image">
                    <img src="https://ugc.production.linktr.ee/8e1bc25f-1ff2-4040-a9a3-a02d076fc885_7189ettO-bL.-AC-SY300-SX300-.jpeg?io=true&size=square-fit
                    " alt="Combler Mini Ice Cube Tray 3 Pack" class="product-image">
                </div>
                <div class="product-content">
                    <div class="product-info">
                        <span class="product-title">ice cube trays</span>
                        <span class="product-count">5 products</span>
                    </div>
                    <button aria-label="Share link" class="three-dots-button">
                        <svg width="3" height="12" viewBox="0 0 3 12" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.5 12.0122C1.0875 12.0122 0.734375 11.8653 0.440625 11.5716C0.146875 11.2778 0 10.9247 0 10.5122C0 10.0997 0.146875 9.74658 0.440625 9.45283C0.734375 9.15908 1.0875 9.01221 1.5 9.01221C1.9125 9.01221 2.26562 9.15908 2.55938 9.45283C2.85313 9.74658 3 10.0997 3 10.5122C3 10.9247 2.85313 11.2778 2.55938 11.5716C2.26562 11.8653 1.9125 12.0122 1.5 12.0122ZM1.5 7.51221C1.0875 7.51221 0.734375 7.36533 0.440625 7.07158C0.146875 6.77783 0 6.42471 0 6.01221C0 5.59971 0.146875 5.24658 0.440625 4.95283C0.734375 4.65908 1.0875 4.51221 1.5 4.51221C1.9125 4.51221 2.26562 4.65908 2.55938 4.95283C2.85313 5.24658 3 5.59971 3 6.01221C3 6.42471 2.85313 6.77783 2.55938 7.07158C2.26562 7.36533 1.9125 7.51221 1.5 7.51221ZM1.5 3.01221C1.0875 3.01221 0.734375 2.86533 0.440625 2.57158C0.146875 2.27783 0 1.92471 0 1.51221C0 1.09971 0.146875 0.746582 0.440625 0.452832C0.734375 0.159082 1.0875 0.012207 1.5 0.012207C1.9125 0.012207 2.26562 0.159082 2.55938 0.452832C2.85313 0.746582 3 1.09971 3 1.51221C3 1.92471 2.85313 2.27783 2.55938 2.57158C2.26562 2.86533 1.9125 3.01221 1.5 3.01221Z"
                                fill="currentColor" />
                        </svg>
                    </button>
                </div>
            </a>
        </div>
    </div>
    <div class="linktree-button-wrapper">
        <a href="https://auth.linktr.ee/login?state=hKFo2SA4aXl3dFVUX3BpdHFIaHItMUtiM01takRhUmIzdFpqUqFupWxvZ2luo3RpZNkgSDhGNVhiTFNjXzZxaW53bEVXc0dpMkdTSS14Z2NKaDWjY2lk2SBYYTl5SUJRSWh0ZTA2SVp4c1VQbFo1OE5xUGNETnk0Zg&client=Xa9yIBQIhte06IZxsUPlZ58NqPcDNy4f&protocol=oauth2&auth0Client=eyJuYW1lIjoiSFdJT0F1dGhCdW5kbGUiLCJ2ZXJzaW9uIjoidW5rbm93biIsImVudmlyb25tZW50Ijp7Im5hbWUiOiJQSFAiLCJ2ZXJzaW9uIjoiOC4zLjE0In19&response_type=code&scope=openid%20profile%20email%20username%20offline_access%20read%3Aauthenticators%20&redirect_uri=https%3A%2F%2Flinktr.ee%2Fconnect%2Fservice%2Fauth0%3Futm_campaign%3Dfooter_logo_cta&audience=https%3A%2F%2Flinktr.ee%2Fapi&mfeOnboarding=true&utm_source=linktree&utm_medium=profile&utm_content=coffeebae97&utm_campaign=footer_logo_cta#/register"
            class="linktree-button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 25" height="16px">
                <path
                    d="M13.5108 5.85343L17.5158 1.73642L19.8404 4.11701L15.6393 8.12199H21.5488V11.4268H15.6113L19.8404 15.5345L17.5158 17.8684L11.7744 12.099L6.03299 17.8684L3.70842 15.5438L7.93745 11.4361H2V8.12199H7.90944L3.70842 4.11701L6.03299 1.73642L10.038 5.85343V0H13.5108V5.85343ZM10.038 16.16H13.5108V24.0019H10.038V16.16Z"
                    fill="#000000"></path>
            </svg>
            <p style="-webkit-text-stroke: 0.5px black;">Join coffeebae97 on Linktree</p>
        </a>
    </div>
    </div>

    <script>
        const toggleCheckbox = document.getElementById('toggle');
        const content1 = document.getElementById('content1');
        const content2 = document.getElementById('content2');
        const toggleLabel = document.querySelector('.toggle-label');

        function switchContent(toContent2) {
            if (toContent2) {
                content1.style.opacity = '0';
                setTimeout(() => {
                    content1.style.display = 'none';
                    content2.style.display = 'block';
                    setTimeout(() => {
                        content2.style.opacity = '1';
                    }, 50);
                }, 200);
            } else {
                content2.style.opacity = '0';
                setTimeout(() => {
                    content2.style.display = 'none';
                    content1.style.display = 'block';
                    setTimeout(() => {
                        content1.style.opacity = '1';
                    }, 50);
                }, 200);
            }
        }

        toggleLabel.addEventListener('click', function (e) {
            e.preventDefault();
            const rect = toggleLabel.getBoundingClientRect();
            const clickX = e.clientX - rect.left;

            if (clickX < rect.width / 2) {
                toggleCheckbox.checked = false;
                switchContent(false);
            } else {
                toggleCheckbox.checked = true;
                switchContent(true);
            }
        });

        content1.style.display = 'block';
        content1.style.opacity = '1';
        content2.style.display = 'none';
    </script>
    <script>

        let lastScrollPosition = 0;
        const header = document.querySelector('header');

        window.addEventListener('scroll', () => {
            const currentScrollPosition = window.pageYOffset;

            if (currentScrollPosition > 20) {
                header.style.opacity = Math.max(1 - (currentScrollPosition - 20) / 100, 0);
                header.style.transition = 'opacity 0.3s ease';
            } else {
                header.style.opacity = '1';
            }

            lastScrollPosition = currentScrollPosition;
        });
    </script>
</body>

</html>
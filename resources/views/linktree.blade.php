<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a8e6867db9.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Mykonos-Linktree</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #272a36;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 28.125rem;
            margin: 3.125rem auto;
            background: linear-gradient(to bottom, #758193, #4a5164, #2a2b37);
            padding: 1.875rem;
            border-radius: 1.5625rem 1.5625rem 0 0;
            text-align: center;
            position: relative;
        }

        .btn-corner {
            width: 2.5rem;
            height: 2.5rem;
            background-color: #ffffff9e;
            border: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            position: absolute;
            top: 1.25rem;
        }

        .btn-left {
            left: 1.25rem;
        }

        .btn-right {
            right: 1.25rem;
        }

        .btn-corner:hover {
            background-color: #ffffffc9;
        }

        .logo img {
            width: 5rem;
            height: 5rem;
            border-radius: 50%;
            margin-top: 20%;
        }

        .title h1 {
            margin-top: 0.625rem;
            font-size: 1.5rem;
            color: #ffffff;
        }

        .links {
            margin-top: 1.25rem;
        }

        .item {
            display: flex;
            align-items: center;
            margin-bottom: 0.75rem;
            padding: 0 1rem;
            border-radius: 2.5rem;
            border: 0.0625rem solid #ccc;
            transition: background 0.2s;
        }

        .item:hover {
            background-color: #ffffff1e;
        }

        .item-icon {
            color: white;
            font-size: 1.125rem;
            flex-shrink: 0;
            width: 1.5rem;
            text-align: center;
        }

        .item a.link-text {
            flex: 1;
            padding: 1.25rem 0.75rem;
            text-decoration: none;
            color: white;
            font-weight: 500;
            border: none;
            background: transparent;
            text-align: center;
        }

        .btn-more {
            background: none;
            border: none;
            color: #ffffff;
            cursor: pointer;
            flex-shrink: 0;
            padding: 0;
            width: 2rem;
            height: 2rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-more:hover {
            background-color: #3636362e
        }

        .btn-join {
            display: block;
            padding: 1rem 1rem;
            border-radius: 2.5rem;
            background: white;
            color: #000;
            font-weight: 550;
            font-size: 0.875rem;
            text-decoration: none;
            width: fit-content;
            margin: 4rem auto 0;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.6rem;
            color: #ffffff;
            margin: 2rem 2rem 2rem;
        }

        .footer-links a {
            color: #ffffff;
            text-decoration: none;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }


    </style>

    <script>
        function showAlert() {
            Swal.fire({
                title: "Hallo!",
                text: "Selamat Siang",
                icon: "success"
            });
        }

        function changeTex() {
            document.getElementById("intro").innerHTML = "Sistem Informasi ITS";
        }

        function changeStyle() {
            const element = document.getElementById("tombol");
            element.style.color = "red";
            element.style.background = "yellow";
        }
    </script>
</head>

<body>
    <div class="container">
        <button class="btn-corner btn-left">
            <i class="fa-brands fa-linktree"></i>
        </button>
        <button class="btn-corner btn-right">
            <i class="fa-solid fa-arrow-up-from-bracket"></i>
        </button>

        <div class="logo">
            <img src="https://pbs.twimg.com/profile_images/1347523283684519938/g5-E2EVw_400x400.jpg">
        </div>

        <div class="title">
            <h1 id="intro" onclick="changeTex()">@Mykonosofficial</h1>
        </div>

        <div id="tombol" onclick="changeStyle()">MYKONOS OFFICIAL</div>

        <div>
            <button onclick="showAlert()">showme</button>
            <button onclick="changeTex()">ganti nama</button>
            <button onclick="changeStyle()">ganti warna</button>
        </div>

        <div class="links">
            <div class="item">
                <span class="item-icon"><i class="fa-brands fa-tiktok"></i></span>
                <a href="https://www.tiktok.com/@mykonosofficial" class="link-text">TikTok Official Store</a>
                <button class="btn-more" onclick="showAlert()">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </button>
            </div>

            <div class="item">
                <span class="item-icon"><i class="fa-solid fa-store"></i></span>
                <a href="https://shopee.co.id/mykonosofficial?smtt=0.0.9" class="link-text">Shopee Official Store</a>
                <button class="btn-more" onclick="showAlert()">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </button>
            </div>

            <div class="item">
                <span class="item-icon"><i class="fa-solid fa-store"></i></span>
                <a href="https://www.tokopedia.com/mykonos?utm_campaign=Shop%20Share&utm_source=ios&utm_medium=Share&_branch_match_id=1567791125594071283&_branch_referrer=H4sIAAAAAAAAA8soKSkottLXL8nPzi9ITclM1MvJzMvWT%2FJIjgosN%2FJxSkmyrytKTUstKsrMS49PKsovL04tsnVNSU8FAJfs3bo6AAAA"
                    class="link-text">Tokopedia Official Store</a>
                <button class="btn-more" onclick="showAlert()">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </button>
            </div>

            <div class="item">
                <span style="margin-left: -0.5rem;">
                    <img src="https://img.lazcdn.com/g/p/7a41b8d1b3f7bdf789c1825c125a3703.jpg_720x720q80.jpg"
                        style="width:2.5rem; height:2.5rem; border-radius:50%; object-fit:cover;">
                </span>
                <a href="https://www.sociolla.com/search?q=mykonos" class="link-text">Sociolla</a>
                <button class="btn-more" onclick="showAlert()">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </button>
            </div>

            <div class="item">
                <span class="item-icon"><i class="fa-solid fa-store"></i></span>
                <a href="https://www.blibli.com/merchant/mykonos-official-store/MYO-70056?utm_campaign=merchant_share&utm_medium=share&utm_source=web"
                    class="link-text">Blibli Official Store</a>
                <button class="btn-more" onclick="showAlert()">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </button>
            </div>

            <a href="#" class="btn-join">Join Mykonosofficial on Linktree</a>

            <a href="{{ url('/') }}" class="btn-join" style="margin-top: 1rem; background-color: #ff4757; color: white;">Kembali ke Beranda</a>

            <div class="footer-links">
                <a href="#">Cookie Preferences</a>
                <span>·</span>
                <a href="https://linktr.ee/s/about/trust-center/report?field86145911=https%3A%2F%2Flinktr.ee%2FMykonosofficial">Report</a>
                <span>·</span>
                <a href="https://linktr.ee/s/privacy">Privacy</a>
            </div>
        </div>
    </div>
</body>

</html>

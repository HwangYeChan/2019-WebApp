<!DOCTYPE HTML>

<html lang="ko">
    <?php include('./assets/php/head.php'); ?>
    <?php $currentpage = 'CONTACT'; ?>
    <body>
        <!-- Navbar -->
        <?php include('assets/php/navbar.php'); ?>
        <!-- Article -->
        <div class="article">
            <h1><span class="h1-border">Contact</span></h1>
            <div id="googleMap"></div>
            <h2>Address</h2>
            <ul>
                <li>
                    Engineering Building #3, Room 421, HANYANG UNIVERSITY ERICA CAMPUS, 55, Hanyangdaehak-ro, Sangnok-gu, Ansan-si, Gyeonggi-do
                </li>
                <li>
                    경기도 안산시 상록구 한양대학로 55 제3공학관 421
                </li>
            </ul>
            <hr>
            <h2>Line</h2>
            <ul>
                <li>
                    Office Room: +82-31-400-4754
                </li>
            </ul>
            <hr>
            <h2>e-mail</h2>
            <ul>
                <li>
                    Prof. Scott Uk-Jin Lee: <a href="mailto:scottlee@hanyang.ac.kr">scottlee@hanyang.ac.kr</a>
                </li>
            </ul>
        </div>
        <!-- Footer -->
        <div class="footer">
            <p>@ 2019 HYU-ERICA SE Lab - 우리 조이름</p>
        </div>
    </body>
    <script>
        function myMap() {
        var mapProp= {
            center: new google.maps.LatLng(37.297488, 126.836238),
            zoom: 17,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        var marker = new google.maps.Marker({position: new google.maps.LatLng(37.297488, 126.836238), map: map});
        }
        </script>
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYQwQiBBWhq0i7Oe1aedxgE4rHiTrlo74&callback=myMap">
    </script>
</html>
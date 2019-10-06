<!DOCTYPE HTML>

<html lang="ko">
    <?php include('./assets/php/head.php'); ?>
    <?php $currentpage = 'MEMBER'; ?>
    <body>
        <!-- Navbar -->
        <?php include('assets/php/navbar.php'); ?>
        <!-- Article -->
        <div class="article">
            <h1><span class="h1-border">Members</span></h1>
            <div class="position">
                <h2> Professor </h2>
            <div class="human">
                <img clas="photo" src="#">
                <div id="info">
                    <ul>
                        <li class="name"> Scott Uk-Jin Lee </li>
                        <li> scottlee@hanyang.ac.kr </li>
                        <li><a href="TBA" target="_blank"> TBA</a></li>
                        <li>an asst. prof. in the CSE Dept. @ HYU (ERICA)<br />
                            leading this Laboratory!</li>
						</ul>
				</div>
				<div id="interest">
					<ul>
                        <li>Career</li>
                        <li>11 -      : Assistant Professor in CSE Dept. @ Hanyang University, Korea<br />
                            09 - 11 : Postdoc @ CEA LIST, France <br />
                            05 - 06 : SE Programmer in SE Dept. @ University of Auckland, NZ <br />
                            04 - 04 : Visiting Researcher @ National University of Singapore<br />
                            04 - 08 : Ph.D in Computer Science @ University of Auckland, NZ<br />
                            00 - 03 : BE in Software Engineering @ University of Auckland, NZ </li>
                    </ul>
                </div> <!-- interest -->
			</div> <!-- human -->
		    </div> <!-- position -->
        </div>
        <!-- Footer -->
        <?php include('assets/php/footer.php'); ?>
    </body>
</html>
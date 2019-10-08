<!DOCTYPE HTML>

<html lang="ko">
    <?php include('assets/php/head.php'); ?>
    <?php $currentpage = 'MEMBER'; ?>
    <body>
        <!-- Navbar -->
        <?php include('assets/php/navbar.php'); ?>
        <!-- Article -->
        <div class="article">
            <h1><span class="h1-border">Notice</span></h1>
			<div class="container">
				<table>
					<thead>
						<tr>
							<th> 번호 </th>
							<th> 게시글 제목 </th>
							<th> 작성자 </th>
							<th> 작성시간 </th>
						</tr>
					</thead>
					<tbody>
						<?php
							$resource = mysql_query( " SELECT * FROM board" );
							$total_len = mysql_num_rows( $resource );

							if( isset($_GET[idx]) ) {
								$start = $_GET[idx] * 10;
								$sql = "SELECT * FROM board ORDER BY no DESC LIMIT $start, 10";
							} 
							else {
								$sql = "SELECT * FROM board ORDER BY no DESC LIMIT 10";
							}

							$resource = mysql_query( $sql );
							$num = 1;

							while( $row = mysql_fetch_assoc( $resource ) ) {
								print "<tr>";
								print "<th scope='row'>$num</th>";
								print "<td>$row[title]</td>";
								print "<td>$row[writer]</td>";
								print "<td>$row[time]</td>";
								print "</tr>";

								$num++;
							}

							$count = (int)($total_len / 10);
							if( $total_len % 10 ) { $count++; }

							print "<tr>";
							print "<td colspan=4 align=center>";

							for( $i = 0; $i < $count; $i++ ) {
								print "<a href=http://192.168.12.100/index.php?idx={$i}> [";
								$j = $i+1;
								print $j;
								print "] </a>";
							}

							print "</td>";
							print "</tr>";
						?>
					</tbody>
				</table>
			</div>
		<div><!-- article -->






			<!-- <main role="main" style="height: 639px;"> -->
				<!-- <div class="container">
					<div class="contents">
						<ul id="board">
							<li class="header">
								<ul>
									<li class="title pull-left">Title</li>
									<li class="name pull-left">Name</li>
									<li class="time pull-left">Date</li>
								</ul>
							</li>
							
							<li class="entry">
								<div class="information">
									<ul>
										<li class="title pull-left">연구원 모집</li>
										<li class="name pull-left">Scott Uk-Jin Lee</li>
										<li class="time pull-left">29 Aug 2014</li>
									</ul>
								</div>
								<div class="content hidden">
									<p>SELab에서는 소프트웨어공학 전 분야, 멀티쓰레드 소프트웨어 및 웹 기술을 함께 연구할 석사, 박사, 석박통합 및 박사후 과정의 연구원을 모집하고 있습니다. 
									<br>
									<br>현재 SELab에서는 미래창조과학부 주체 NIPA주관의 대규모 프로젝트에 활발히 참여하고 있으며 이를 통하여 연구원들의 연구가 원활히 진행될 수 있도록 프로젝트 인건비를 지원하고 있습니다. 이 밖에도 연구조교, 교육조교 장학금 외 다양한 장학금을 지원하고 있으며 입학시 쾌적한 연구공간과 연구 장비 (PC/iMac 등) 지원도 하고 있습니다. 
									<br>
									<br>SELab 연구 분야에 관심이 있으신 분은 아래로 연락주세요! 
									<br>
									<br>한양대학교 ERICA 제 3공학관 403호, 421호 
									<br>scottlee@hanyang.ac.kr 
									<br>031-400-5238 / 031-400-4754</p>
								</div>
							</li>
							
							<li class="entry">
								<div class="information">
									<ul>
										<li class="title pull-left">2014 PL-SE First Joint Workshop</li>
										<li class="name pull-left">Scott Uk-Jin Lee</li>
										<li class="time pull-left">29 Apr 2014</li>
									</ul>
								</div>
								<div class="content hidden">
									<p>PLASSE &amp; SE Lab. in the CSE Dept. @ HYU are organizing the 1st Joint Workshop in the Spring of 2014. 
									<br>
									<br>2:00pm - 6:00pm, 10th of May, 2014 @ Engineering Building No.3 Room 315</p>
									<p class="attachement">
										Attachment : <a href="download.php?filename=12014_04_29_20_20_53^PL-SE_1st schedule.pdf">PL-SE_1st schedule.pdf</a>
									</p>
								</div>
							</li>
							
							<li class="entry">
								<div class="information">
									<ul>
										<li class="title pull-left">Welcome to SELab Homepage!</li>
										<li class="name pull-left">Scott Uk-Jin Lee</li>
										<li class="time pull-left">06 Mar 2014</li>
														</ul>
								</div>
								<div class="content hidden">
									<p>Welcome to Software Engineering Laboratory Homepage. 
									<br>
									<br>Software Engineering Laboratory is  
									<br>- within Dept. of Computer Science and Engineering at Hanyang University, South Korea 
									<br>- established in Sept. 2011 
									<br>
									<br>The current version (ver2.0) of SELab Web Site is launched in Feb. 2014. </p>
								</div>
							</li>
						</ul>
						<span id="end"></span>
					</div>
				</div> -->
			<!-- </main> -->
		<!-- </div> article -->
   
        <!-- Footer -->
        <?php include('assets/php/footer.php'); ?>
    </body>
</html>
<?php
  session_start();
  $id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel = "stylesheet" href="main1.css" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script language="javascript">
    function showClock(){
        var currentDate = new Date();
        var divClock = document.getElementById("divClock");

        var msg = "현재 시간:"+currentDate.getHours()+":"
        msg += currentDate.getMinutes()+":";
        msg += currentDate.getSeconds();

        divClock.innerText = msg;
        setTimeout(showClock,1000);
    }
    </script>

    <meta charset="utf-8">
    <title>소프트웨어학부 사물함 신청 시스템입니다.</title>
    <style>
    body{
      background-image: url(back1.jpg);
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
    }
    table, th, td{
      padding: 5px 15px 5px 15px;
      font-family: 'Nanum Gothic', sans-serif;
      font-size: 15px;
      border: 1px solid gray;
      border-collapse: collapse;
      }
    div {
	    border: 4px solid yellowgreen;
	    color: black;
	    background : aliceblue;
      float: right;
      }
      span {
        border: 4px solid yellowgreen;
      }
      h1 {
        font-size: 30px;
        font-family: 'Nanum Gothic', sans-serif;

      }
      .locker {
          cursor : pointer;
          background-color: skyblue;
      }
    </style>
  </head>
  <body onload="showClock()", "realtimeClock()">
    <center><h1>국민대학교 소프트웨어학부 사물함 신청</h1>
      <br><br>
    <form>
    					<input type="hidden" name="siteId" value="reservation"/>
    					<input type="hidden" name="placeSeq" value="22292"/>
    					<input type="hidden" name="id" value="reservation_040300000000"/>

              <span>&nbsp;
    					<label>학년 :</label>
    					<select name="lockerSeq" class="select1">

    						<option value="74839" >1학년</option>

    						<option value="74834" >2학년</option>

    						<option value="74835" >3학년</option>

    						<option value="74836" >4학년</option>


    					</select>&nbsp;
            </span>
            <span>&nbsp;
    					<label>      학기 선택 :</label>
    					<select name="year" class="select1">


    						<option selected>2017</option>

    						<option >2018</option>

    						<option >2019</option>

    						<option >2020</option>

    						<option >2021</option>

    						<option >2022</option>

    						<option >2023</option>

    						<option >2024</option>

    						<option >2025</option>

    						<option >2026</option>

    						<option >2027</option>

    					</select>&nbsp;
            </span>
            <span>&nbsp;학년
    					<select name="month" class="select1">

    						<option selected>1</option>

    						<option >2</option>


    					</select>&nbsp;
            </span>
            <span>&nbsp;
              학기
    					<input type="submit" value="새로고침"/>&nbsp;
            </span>
              <div>
                학번 : <?php
                session_start();
                echo $id;
                ?><br>
                <a href="logout.php">로그아웃</a></div>

    				</form>
            <br><br>

            <table>
              <th rowspan="7", colspan="7">X</th>
              <tr>
                <td rowspan="9">계단</td>
                <td class="locker" id="A-57">A-57</td>
                <td class="locker" id="A-60">A-60</td>
                <td class="locker" id="A-63">A-63</td>
                <td rowspan="9">복도</td>
              </tr>
              <tr>
                <td class="locker" id="A-56">A-56</td>
                <td class="locker" id="A-59">A-59</td>
                <td class="locker" id="A-62">A-62</td>
              </tr>
              <tr>
                <td class="locker" id="A-55">A-55</td>
                <td class="locker" id="A-58">A-58</td>
                <td class="locker" id="A-61">A-61</td>
              </tr>
              <tr>
                <td class="locker" id="A-48">A-48</td>
                <td class="locker" id="A-51">A-51</td>
                <td class="locker" id="A-54">A-54</td>
              </tr>
              <tr>
                <td class="locker" id="A-47">A-47</td>
                <td class="locker" id="A-50">A-50</td>
                <td class="locker" id="A-53">A-53</td>
              </tr>
              <tr>
                <td class="locker" id="A-46">A-46</td>
                <td class="locker" id="A-49">A-49</td>
                <td class="locker" id="A-52">A-52</td>
              </tr>
              <tr>
                <th rowspan="3">D구역</th>
                <td>X</td>
                <td class="locker" id="A-74">A-74</td>
                <td class="locker" id="A-75">A-75</td>
                <td class="locker" id="A-64">A-64</td>
                <td class="locker" id="A-65">A-65</td>
                <td class="locker" id="A-66">A-66</td>
                <td class="locker" id="A-39">A-39</td>
                <td class="locker" id="A-42">A-42</td>
                <td class="locker" id="A-45">A-45</td>
              </tr>
              <tr>
                <td class="locker" id="A-76">A-76</td>
                <td class="locker" id="A-77">A-77</td>
                <td class="locker" id="A-78">A-78</td>
                <td class="locker" id="A-67">A-67</td>
                <td class="locker" id="A-68">A-68</td>
                <td class="locker" id="A-69">A-69</td>
                <td class="locker" id="A-38">A-38</td>
                <td class="locker" id="A-41">A-41</td>
                <td class="locker" id="A-44">A-44</td>
              </tr>
              <tr>
                <td class="locker" id="A-79">A-79</td>
                <td class="locker" id="A-80">A-80</td>
                <td>X</td>
                <td class="locker" id="A-70">A-70</td>
                <td class="locker" id="A-71">A-71</td>
                <td class="locker" id="A-72">A-72</td>
                <td class="locker" id="A-37">A-37</td>
                <td class="locker" id="A-40">A-40</td>
                <td class="locker" id="A-43">A-43</td>
              </tr>
              <tr>
                <th colspan="12">복도</th>
              </tr>
              <tr>
                <th colspan="6">232호실</th>
                <th colspan="6">화장실</th>
              </tr>
            </table></center>

  <div style="border:1px solid #dedede; width:600px; height:250px; line-height:250px; color:#666;font-size:50px; text-align:center;" id="divClock" class="clock">
  </div>
  <script type="text/javascript" src="cabinetColor.js"></script>
  <script type="text/javascript" src="cabinetPick.js"></script>
  </body>
</html>

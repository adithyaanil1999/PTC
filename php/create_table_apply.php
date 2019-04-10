<?php 
     session_start();
     include('config.php');

    function create_header()
    {
        $div="&lt;div class=&quot;header&quot;&gt;
        &lt;div class=&quot;header-text dec&quot;&gt;Vacancy ID&lt;/div&gt;
        &lt;div class=&quot;header-text dec&quot;&gt;Recruiter ID&lt;/div&gt;
        &lt;div class=&quot;header-text dec&quot;&gt;Company Name&lt;/div&gt;
        &lt;div class=&quot;header-text inc&quot;&gt;Vacancy Desc&lt;/div&gt;
        &lt;div class=&quot;header-text inc&quot;&gt;Skills Req&lt;/div&gt;
        &lt;div class=&quot;header-text dec&quot;&gt;MinCGPA&lt;/div&gt;
        &lt;div class=&quot;header-text inc&quot;&gt;Location&lt;/div&gt;
        &lt;div class=&quot;header-text inc&quot;&gt;Date&lt;/div&gt;
        &lt;div class=&quot;header-text dec&quot;&gt;Apply?&lt;/div&gt;

    &lt;/div&gt;  ";
        echo html_entity_decode($div);
    }

    $sql="SELECT v.*,r.rec_comp FROM vacancy_listing v JOIN user_recruiter r ON v.vacancy_recruiter_id=r.rec_id;";

    $result=mysqli_query($link,$sql1);
    $row=mysqli_fetch_assoc($result);
    
    function create_header_2()
    {
        $div="&lt;div class=&quot;header&quot;&gt;
        &lt;div class=&quot;header-text dec&quot;&gt;Vacancy ID&lt;/div&gt;
        &lt;div class=&quot;header-text dec&quot;&gt;Recruiter ID&lt;/div&gt;
        &lt;div class=&quot;header-text dec&quot;&gt;Company Name&lt;/div&gt;
        &lt;div class=&quot;header-text inc&quot;&gt;Location&lt;/div&gt;
        &lt;div class=&quot;header-text inc&quot;&gt;Date&lt;/div&gt;
        &lt;/div&gt;  ";
        echo html_entity_decode($div);
    }

    function create_header_3()
    {
        $div="&lt;div class=&quot;header&quot;&gt;
        &lt;div class=&quot;header-text dec&quot;&gt;offer ID&lt;/div&gt;
        &lt;div class=&quot;header-text dec&quot;&gt;Recruiter ID&lt;/div&gt;
        &lt;div class=&quot;header-text dec&quot;&gt;Company Name&lt;/div&gt;
        &lt;div class=&quot;header-text inc&quot;&gt;Amount&lt;/div&gt;
        &lt;div class=&quot;header-text inc&quot;&gt;Accept&lt;/div&gt;
        &lt;div class=&quot;header-text inc&quot;&gt;Regect&lt;/div&gt;
        &lt;/div&gt;  ";
        echo html_entity_decode($div);
    }
?>
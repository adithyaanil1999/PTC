<?php

    function create_header()
    {
        $div="&lt;div class=&quot;header&quot;&gt;
        &lt;div class=&quot;header-text dec&quot;&gt;Student ID&lt;/div&gt;
        &lt;div class=&quot;header-text inc&quot;&gt;Student Name&lt;/div&gt;
        &lt;div class=&quot;header-text dec&quot;&gt;CGPA&lt;/div&gt;
        &lt;div class=&quot;header-text inc&quot;&gt;Career Obj&lt;/div&gt;
        &lt;div class=&quot;header-text inc&quot;&gt;Professional Skills&lt;/div&gt;
        &lt;div class=&quot;header-text inc&quot;&gt;Personal Skills&lt;/div&gt;
        &lt;div class=&quot;header-text dec&quot;&gt;Approve?&lt;/div&gt;
        &lt;div class=&quot;header-text dec&quot;&gt;Deny?&lt;/div&gt;
    &lt;/div&gt;  ";
        echo html_entity_decode($div);
    }

    function create_header_2()
    {
        $div="&lt;div class=&quot;header&quot;&gt;
        &lt;div class=&quot;header-text dec&quot;&gt;Vacancy ID&lt;/div&gt;
        &lt;div class=&quot;header-text dec&quot;&gt;Student ID&lt;/div&gt;
        &lt;div class=&quot;header-text dec&quot;&gt;Company Name&lt;/div&gt;
        &lt;div class=&quot;header-text inc&quot;&gt;Location&lt;/div&gt;
        &lt;div class=&quot;header-text inc&quot;&gt;Date&lt;/div&gt;
        &lt;div class=&quot;header-text inc&quot;&gt;Send Offer?&lt;/div&gt;
        
        &lt;/div&gt;";
        
        
        echo html_entity_decode($div);
    }

?>
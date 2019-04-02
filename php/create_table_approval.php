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

?>
       <!--FOOTER BEGINS HERE--> 
        
    </div><!--/END CONTENT-->
    
    <aside id="sidebar">
    	<section>
        	<?=$config->sidebar1; ?>
            <ul>
            <?php 
				echo makeLinks($config->nav1,'<li>','</li>'); #link arrays are created in config_inc.php file
			?>	
            	<!--<li><a href="javascript:;">Home</a></li>
                <li><a href="javascript:;">Contact</a></li>
                <li><a href="javascript:;">mysql Classic</a></li>
                <li><a href="javascript:;">mysqli Improved</a></li>
                <li><a href="javascript:;">MySQL Shared</a></li>
                <li><a href="javascript:;">Postback</a></li>
                <li><a href="javascript:;">Edit</a></li>
                <li><a href="javascript:;">Postback (no HTML)</a></li>
                <li><a href="javascript:;">Deprecated</a></li>
                <li><a href="javascript:;">Error Test</a></li>-->
            </ul>
        </section>
        <section>
        	<h4>Picture Area</h4>
            <a href="javascript:;"><img src="images/moon.jpg" alt="Moon" class="floatleft" /></a>
            <a href="javascript:;"><img src="images/explorer.jpg" alt="Explorer" class="floatright" /></a>
            <a href="javascript:;"><img src="images/workstation.jpg" alt="Spaceman" class="floatleft" /></a>
            <a href="javascript:;"><img src="images/rocket.jpg" alt="Rocket" class="floatright" /></a>
        </section>
        <section>
        	<h4>Sidebar 2</h4>
            <p>This is where the second sidebar goes.</p>
        </section>
    </aside>
    
    
    
    <footer>
    	<p>PHP &amp; MySQL Demo || Lenny Peters</p>
    </footer>
    
    
    <!-- begin validation buttons -->
<p class="aligncenter">
<a href="http://validator.w3.org/check?uri=referer">
  <img src="http://www.w3.org/html/logo/badge/html5-badge-h-solo.png" 
  width="31" height="32" alt="valid HTML5" />
 </a>
 <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">
  <img src="http://jigsaw.w3.org/css-validator/images/vcss" 
   alt="Valid CSS3" height="31" width="88" />
</a>
</p>
<!-- end validation buttons -->
</div><!--/END WRAPPER-->





</body>
</html>
This is the BlankSlate Theme as customized by Colin McParland (Tiny Bird Web Solutions).  It's intended to curb the use of bulky Wordpress plugins and practices.

<h3>Things I added/changed:</h3>
<ul>
<li>package.json file to be used with NPM.  Includes gulp, gulp-ruby-sass and clean-css.</li>
<li>gulpfile.js to run scss compile and css minify tasks</li>
<li>Removed some markdown from header.php, footer.php, index.php</li>
<li>Added a js folder and enqueued all the scripts</li>
<li>Included <a target="_blank" href='https://github.com/kenwheeler/slick'><em>Slick Slider</em></a> to avoid using bulky Wordpress slider plugins</li>
<li>Included a copy of WooCommerce templates for customization if the site includes e-commerce</li>
</ul>

<h3>Useage</h3>

<ol>
<li><a target="_blank" href='https://nodejs.org/en/download/package-manager/'>Install npm on your server.</a></li>
<li><a href='https://code.tutsplus.com/articles/download-and-install-wordpress-via-the-shell-over-ssh--wp-24403' target='_blank'>Download and install a blank copy of Wordpress on your server.</a></li>
<li>Navigate to your Wordpress theme directory and install the theme ```wget http://tinybird.ca/tinybird-blankslate.zip```</li>
<li>Extract the included themes into your theme directory 
```
tar xfz tinybird-blankslate.zip
mv tinybird-blankslate/* .
rm tinybird-blankslate.zip
rm -r tinybird-blankslate
```
</li>
<li>Run ```npm install``` to install the NPM dependencies</li>
</ol>

And that's pretty much it!

<h3>Gulp Commands</h3>
Once you have everything installed, you get use ```gulp``` to run your CSS tasks.

Running ```gulp``` will initiate the SCSS compiler task, which watches the ```style.scss``` file.  

Running ```gulp cssmin``` will minify the generated ```style.css``` file.
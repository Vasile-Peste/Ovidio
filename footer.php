</div>
</main>
<footer class="flex flex--full flex--center footer footer--triangle">
    <?php dynamic_sidebar("before-footer"); ?>
    <div class="flex container">
        <?php render("footer/menu"); ?>
    </div>
    <pre class="flex flex--full stream">
        <code class="stream__text stream__text--repeat-y-2">
			<a href="https://twitter.com/vasile_peste" rel="nofollow" class="twitter-follow-button">Follow @vasile_peste</a>
                    &copy; 2018-2019 Designed by Vasile Pește.
        </code>
        <code class="stream__text stream__text--repeat-y-2 stream__text--reverse-2">
                    0100010001100101011100110110100101100111
                    0110111001100101011001000010000001100010
                    0111100100100000010101100110000101110011
                    0110100101101100011001010010000001010000
                    0110010110000110010111010001100101

                                ______________
                               /             /|
                              /             / |
                             /____________ /  |
                            | ___________ |   |
                            ||           ||   |
                            ||           ||   |
                            ||           ||   |
                            ||___________||   |
                            |   _______   |  /
                            /|  (_______)  | /
                            ( |_____________|/
                            \
                            .=======================.
                            | ::::::::::::::::  ::: |
                            | ::::::::::::::{}  ::: |
                            |   -----------     ::: |
                            `-----------------------'
        </code>
    </pre>
    <?php dynamic_sidebar("after-footer"); ?>
</footer>
<?php wp_footer(); ?>
<?php dynamic_sidebar("body-end"); ?>
</body>
</html>
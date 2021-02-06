<?php

$title = 'Bet.io - Wild Machine';
$currentPage = '/wildmachine';
include('assets/template/header.php');

?>

<div id="app">
    <section class="visual__container">
        <div class="arrow-left"></div>
            <div class="arrow-right"></div>
                <div id="window" class="flexContainer">
                    <div class="slot0">
                        <span class="hr"></span>
                        <div class="shadow">
                        </div>
                        <div class="strip">
                        </div>
                    </div>
                    <div class="slot1">
                        <span class="hr"></span>
                        <div class="shadow">
                        </div>
                        <div class="strip">
                        </div>
                    </div>
                    <div class="slot2">
                        <span class="hr"></span>
                        <div class="shadow">
                        </div>
                        <div class="strip">
                        </div>
                    </div>
                </div>
    </section>
    <section class="wildmachine__stats__container">
        <div id="inset">
            <div id="ui" class="flexContainer">
                <div>
                    <label for="credits">Valeur jeton :</label>
                    <input type="text" id="credits" readonly />
                </div>
            <div id="winningscontainer">
                <label for="bet">Mise :</label>
                <input type="text" id="bet" readonly />
            </div>
            <div>
                <label for="earn">Gains :</label>
                <input type="text" id="earn" readonly />
            </div>
            <button id="spin">Spin</button>
            </div>
        </div>
    </section>
</div>

<?php require('assets/template/footer.php'); ?>
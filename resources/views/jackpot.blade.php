<html lang="en">
    <head>
        <meta charset="UTF-8">

        <title>Jackpot :: CSGON1.COM</title>
        <meta property="og:title" content="CSGON1.COM" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="/" />
        <meta name="description" content="Play with Your Friends and Win Skins!">
		<meta name="keywords" content="counter,strike,csgo,csgotuz1k,tuz1k,csgo tuz1k,CSGON1.COM,tuz1kcsgo,roulette,skins,referral,earn,points,bet,win,shop,buy,sell,gun,knife,knives,best,most,platform,marketplace,high,roller,stake,social,gambling,gamble,affiliate">


        <meta name="csrf-token" content="63rWLQI6W2YMswWrBZLCww00RRFrqaq8AjeJtALr" />
        <meta name="language" content="en" />
        <meta name="websocket" content="https://CSGON1.COM:8443" /> 
        <meta name="game" content="jackpot" />
        <meta name="logged" content="@if (Auth::check()){{1}}@else{{0}}@endif" />
        <meta name="steamid" content="@if (Auth::check()){{Auth::user()->steamid}}@endif" />
        <meta name="username" content="@if (Auth::check()){{Auth::user()->username}}@endif"/>
        <meta name="avatar" content="@if (Auth::check()){{Auth::user()->avatar}}@endif"/>
        <meta name="token" content="{{$token}}"/>
        <meta name="tradeURL" content="@if (Auth::check() && Auth::user()->tradeurl){{'https://steamcommunity.com/tradeoffer/new/?partner='.(substr(Auth::user()->steamid,7) - 7960265728).'&token='.Auth::user()->tradeurl}}@endif"/>
        <meta name="time" content="{{$time}}"/>
        
        <meta name="viewport" content="width=1400, initial-scale=1">
		<meta name="google-site-verification" content="1X4JxaLG_AM6F9u410Q6K4XL9HuqJjntjN3k8dmJ53E" />

        <link rel="icon" type="image/png" href="/favicon.png" />
		<link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
		<link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<script src="/js/jquery-1.8.3.js"></script>
<style>
.roulette .roulette-wheel-outer {
    position: relative;
    background: #15181F;
    border-bottom: 0px solid transparent;
    padding: 5px;
}

.box-bets table tr:first-child {
    background: #15181F;
    text-transform: uppercase;
}

.box-bets {
    margin-top: 10px;
    border-top: 0px solid transparent;
}

.roulette .balance-latest {
    box-sizing: initial;
    display: -ms-flexbox;
    display: flex;
    padding: 0px;
    background: #15181f;
    height: 70px;
    font-weight: 700;
    font-size: 18px;
    border-top: 1px solid #fb5616;
    border-bottom: 1px solid #fb5616;
}

.roulette .player-bets .player-bet .amount {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 50%;
    background: #181B24;
}

.roulette .player-bets .player-bet {
    border-bottom: 0px solid transparent;
    display: -ms-flexbox;
    display: flex;
    font-size: 14px;
    border-bottom: 0px solid transparent !important;
    font-weight: 700;
}
</style>	

		
    </head>
<body>

  
<nav class="navbar">
<div id="sidebar-wrapper" style="background: #1A1D26;border-left: 0px solid transparent!important;">
<ul id="sidebar-nav sidebarshow" class="sidebar-nav sidebarshow">
<div class="toggle menu-toggle-button">
      <i class="fa fa-angle-right" style="color: #15181F;font-weight: 700;"></i>
</div>
@if (Auth::check())
<li class="account">
<div class="avatar">
<img src="{{Auth::user()->avatar}}">
<span class="welcome1"> Welcome </span>
</div>

</li>
@else
<li class="test123">
<a href="/auth/login">
<div class="icon">
<i class="fa fa-steam" aria-hidden="true"></i>
</div>
<span class="sidespan sidespanvisible">LOG IN</span>
</a>
</li>
@endif
<li>
<a href="/">
<div class="icon">
<img src="/img/side-bar/roul.png">
</div>
<span class="sidespan sidespanvisible">ROULETTE</span>
</a>
</li>
<li>
<a href="/coinflip">
<div class="icon">
<img src="/img/side-bar/flip.png">
</div>
<span class="sidespan sidespanvisible">COINFLIP</span>
</a>
</li>
<li>
<a href="/jackpot">
<div class="icon">
<img src="/img/side-bar/jackpot.png" style="opacity: 1 !important;">
</div>
<span class="sidespan sidespanvisible">JACKPOT</span>
</a>
<li style="border-bottom: 4px solid #15181F;">
<a href="/crash">
<div class="icon">
<img src="/img/side-bar/crash.png">
</div>
<span class="sidespan sidespanvisible">CRASH</span>
</a>
</li>
@if (Auth::check())
<li>
<a href="/user/profile">
<div class="icon">
<img src="/img/side-bar/account.png">
</div>
<span class="sidespan sidespanvisible">PROFILE</span>
</a>
</li>
<li style="border-bottom: 4px solid #15181F;">
<a href="/user/referrals">
<div class="icon">
<img src="/img/side-bar/stats.png">
</div>
<span class="sidespan sidespanvisible">REFERRALS</span>
</a>
</li>
<li>
<a href="/user/deposit">
<div class="icon">
<img src="/img/side-bar/funds.png">
</div>
<span class="sidespan sidespanvisible">DEPOSIT</span>
</a>
</li>
<li style="border-bottom: 4px solid #15181F;">
<a href="/user/withdraw">
<div class="icon">
<img src="/img/side-bar/shop.png">
</div>
<span class="sidespan sidespanvisible">STORE</span>
</a>
</li>
@endif
<li>
<a href="/faq">
<div class="icon">
<img src="/img/side-bar/support.png">
</div>
<span class="sidespan sidespanvisible">FAQ</span>
</a>
</li>
@if (Auth::check())
<li style="border-bottom: 4px solid #15181F;">
<a href="/auth/logout">
<div class="icon">
<i class="fa fa-power-off"></i>
</div>
<span class="sidespan sidespanvisible">LOG OUT</span>
</a>
</li>
@endif
<li>
<a>
<div class="icon">
<i class="fa fa-power-ofx"></i>
</div>
</a>
</li>
<li>
<a>
<div class="icon">
<i class="fa fa-power-ofx"></i>
</div>
</a>
</li>
<li>
<a>
<div class="icon">
<i class="fa fa-power-ofx"></i>
</div>
</a>
</li>
<li>
<a>
<div class="icon">
<i class="fa fa-power-ofx"></i>
</div>
</a>
</li>
<li>
<a>
<div class="icon">
<i class="fa fa-power-ofx"></i>
</div>
</a>
</li>
<li>
<a>
<div class="icon">
<i class="fa fa-power-ofx"></i>
</div>
</a>
</li>
<li>
<a>
<div class="icon">
<i class="fa fa-power-ofx"></i>
</div>
</a>
</li>
<li>
<a>
<div class="icon">
<i class="fa fa-power-ofx"></i>
</div>
</a>
</li>
<li>
<a>
<div class="icon">
<i class="fa fa-power-ofx"></i>
</div>
</a>
</li>
<li>
<a>
<div class="icon">
<i class="fa fa-power-ofx"></i>
</div>
</a>
</li>
</ul>
</div>

<div class="footer1" style="width: 75px;">
      <div class="data">

        <div class="online sidebarshow1"><div class="copyright"><img src="/img/icons-small/players.png"> <span class="players-online">0</span></div>
</div>
      </div>


    </div>
</nav>

<div class="center">

<div class="top-navigation">
        <div class="circleButton sound-toggle-button"><i class="fa fa-volume-up" aria-hidden="true"></i></div>
		@if (Auth::check())
        <div class="circleButton1 balance" data-balance="{{Auth::user()->wallet}}"><a href="/user/deposit"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;</a> <span class="value">{{Auth::user()->wallet}}</span></div>
		@endif
</div>


    <div class="main-wrapper">
        <main>
                <div class="roulette">
        <div class="controls">
			<div class="color-select">
			
            </div>
            <div class="inputs-area">
                <div class="buttons">
                    <div class="button" data-action="clear">Clear</div>
                    <div class="button" data-action="last">Last</div>
                    <div class="button" data-action="100+"><span>+</span>100</div>
                    <div class="button" data-action="1000+"><span>+</span>1K</div>
                    <div class="button" data-action="10000+"><span>+</span>10K</div>
                    <div class="button" data-action="1/2">1<span>/</span>2</div>
                    <div class="button" data-action="x2"><span>X</span>2</div>
                    <div class="button" data-action="max">Max</div>
                </div>
                <div class="amount">
                    <label for="minesBet">Wager Amount: </label>
                    <input id="minesBet" class="value" placeholder="Your amount..." />
                </div>
            </div>
            <div class="play">
                <button class="btn-play">Bet!</button>
            </div>
        </div>
        <div class="balance-latest">
            <div class="lol123" style="display: -ms-flexbox;display: flex;-ms-flex-align: center;align-items: center;-ms-flex-pack: distribute;justify-content: space-around;overflow: hidden;-ms-flex-wrap: wrap;flex-wrap: wrap; margin: 0 auto;position: relative;">
			<div style="display: -ms-flexbox;display: flex;-ms-flex-align: center;align-items: center;-ms-flex-pack: distribute;justify-content: space-around;overflow: hidden;-ms-flex-wrap: wrap;flex-wrap: wrap; margin: 0 auto;position: relative;"><p style="font-size: 22px;">Worth:</p>  <div class="jptotal" style="text-align: center; color: #fb5616;font-weight: bold; font-size: 30px;line-height: 30px;"></div></div>
			</div>
		</div>

        <div class="roulette-wheel-outer" style="border-bottom: 0px solid transparent !important;;display: inline-block;width: 100%;;height: 346;min-height: 346;"><div class="flip-container" style="width: 300px;height: 300px;position: relative; display: table;margin: 25px auto;stroke: #fb5616 !important;font-weight: bold !important; font-size: 55px;"><div class="flip" style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%);font-weight: bold !important; font-size: 55px;stroke: #fb5616 !important;"></div></div></div>
	
		<!--<div class="top-box box-history bottomFade" style="background: #15181F;width: 31.97%;display: inline-block;max-height: 346px;">
		<center>
                        <div class="title" style="font-size: 20px;color: #fefefe;padding: 3px 10px;font-weight: 700;justify-content: center;">History</div>
        </center>
						<div class="history" style="max-height: 346px;overflow: auto;">

                        </div>
						
                    </div> -->
	
			<div class="box-bets">
                <table>
                    <tr style="border-bottom: 3px solid rgba(251, 88, 24, 0.5) !important;"> <td>Players</td> </tr>
                </table>
				
			<div class="player-bets"></div>
				
            </div>

	</div>
        </main>
    </div>
</div>

<div class="chat">
	<div class="toggle chat-toggle-button">
      <i class="fa fa-angle-left" style="color: #15181F;"></i>
    </div>
    <div class="chat-header chatheader0">
        <div class="text">
            CHAT
        </div>
    </div>
    <div class="chat-header chatheader1 chatheaderhide">
        <div class="text">
            CHAT
        </div>
    </div>
    <div class="chat-messages">
    </div> 
    @if (Auth::check())
    <div class="send-area">
                    <div class="input-area">
                <input type="text" class="chat-input" placeholder="Your message..." maxlength="75" pattern="[A-Za-z0-9_./!?,$+-= ]{1,75}" required>
                <div class="emots-button">
                    <img src="/img/misc/emots-button.png">
                </div>
                <div class="emots"></div>
            </div>
            <img src="/img/chat-send-img.png" class="send-message">
            </div>
    @else
    <div class="send-area">
                    <a href="/auth/login" class="need-sign-in">
                <img src="/img/misc/sign-in-for-chat.png">
            </a>
            </div>
    @endif
	<div class="footer" style="width: 303px;">
      <div class="data">
        <div class="social">
          <a href="https://twitter.com/tuz1kyt" target="_blank"><i class="fa fa-twitter"></i></a>
          <a href="https://steamcommunity.com/groups/gon1_cs" target="_blank"><i class="fa fa-steam"></i></a>
        </div>

        <div class="copyright copyright0">&copy; CSGON1.COM 2017</div>
        <div class="copyright copyright1 copyrighthide">&copy;</div>
        <div class="legal">
          <a href="/terms" target="_blank">Live Support</a>
           <a class="chat-info" style="cursor: pointer;">Rules</a>
        </div>

      </div>


    </div>
</div>
<div class="popup">
    <div class="popup-inner">
        <div class="popup-title">
            RULES
            <div class="popup-close">x</div>
        </div>
        <div class="content">
            <p>1 - Things that will get you banned / muted:</p>
            <ul>
                <li>Spamming</li>
                <li>Begging</li>
                <li>Posting advertisement codes</li>
                <li>Advertising other websites</li>
                <li>Using a different language than english</li>
                <li>Overusing capslock</li>
                <li>Posting links to external sites</li>
            </ul>
            <p>2 - Please forward all problems to: <b style="color: #fb5616;text-decoration: none !important;text-transform: none !important;">support@CSGON1.COM</b></p>
			<p>3 - Please forward all Business Inquiries to: <b style="color: #fb5616;text-decoration: none !important;text-transform: none !important;">business@CSGON1.COM</b></p>
            <p>4 - This site is 18+ By playing you agree that you meet the legal age requirement.</p>
            <p>5 - Keep swearing to a minimum, don’t flame other users.</p>
			<p>6 - CSGON1.COM is not responsible for trade/account bans that may occur as a resulting of accepting items from our bots.</p>
			<p>7 - CSGON1.COM assumes no responsibility for missed bets as a result of network latency or disconnections. Always ensure a stable connection before placing bets. Avoid placing important bets at the last second.</p>

            <p><button class="popup-close">I UNDERSTAND</button></p>
        </div>
    </div>
</div>
</div>

<script src="/js/anijs.js"></script>
<script src="/js/helpers/dom/anijs-helper-dom.js"></script>
<script src='/js/vendor.js'></script>
<script src="/js/lang/en.js"></script>

    <script src="/js/progress.min.js"></script>
    <script src="/js/jackpot.js"></script>
    <script src="/js/HackTimerWorker.min.js"></script>
    <script src="/js/HackTimer.silent.min.js"></script>
@if((Auth::check()) && ((Auth::user()->rank == 'user') || (Auth::user()->rank == 'gold') || (Auth::user()->rank == 'diamond') || (Auth::user()->rank == 'streamer')))<script src="/js/chat.js"></script>
@elseif((Auth::check()) && (Auth::user()->rank == 'siteAdmin'))<script src="/js/adminchat57NRz4.js"></script>
@elseif((Auth::check()) && (Auth::user()->rank == 'siteMod'))<script src="/js/modchat57NRz4.js"></script>
@elseif((Auth::check()) && (Auth::user()->rank == 'root'))<script src="/js/rootchat57NRz4.js"></script>
@else<script src="/js/chat.js"></script>
@endif
<script src="/js/app.js"></script>
</body>
</html>
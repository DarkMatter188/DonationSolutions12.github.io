<!doctype html>
<html>
<head>
<title>Donation Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div class="container">
    <div class="col-xs-6 col-xs-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading" class="single_input wow fadeInUp" data-wow-duration="1s">
            
                <h3 class="text-center">Donation Form </h3>
            </div>
            <div class="panel-body">
            <form action="payment.php" method="post">
                <div class="form-group" >
                    <input type="text" class="form-control"  name="Name" size="20" maxlength="20" autocomplete="off" tabindex="1" placeholder="Your Name" required>
                </div>
                
                <div class="form-group">
                    <input type="Email" class="form-control"  name="Email" maxlength="25" size="12"  autocomplete="off" tabindex="3" placeholder="Email" required >
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="phone" autocomplete="off" tabindex="5"  placeholder="Phone Number" required>
                </div>
               
                <div class="form-group">
                    <input type="number" class="form-control" name="Amount" autocomplete="off" tabindex="5"  placeholder="Amount" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="CheckOut" class="btn btn-success btn-lg">
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
</html>
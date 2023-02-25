<div class="col-12">
<div class="alert alert-success text-center p-2" style="font-size: 14px;">
<strong>Success!</strong> Account has been successfully created.
<hr>
<ul class="list-unstyled">
<li class="list-group-item d-flex justify-content-between align-items-center">Host <b>pl02.sshocean.net</b></li>
<li class="list-group-item d-flex justify-content-between align-items-center">Username <b>sshocean-chillout</b></li>
<li class="list-group-item d-flex justify-content-between align-items-center">Password <b>123123</b></li>
<li class="list-group-item d-flex justify-content-between align-items-center">Created <b>14 Feb 2023</b></li>
<li class="list-group-item d-flex justify-content-between align-items-center">Expired <b>21 Feb 2023</b></li>
<li class="list-group-item d-flex justify-content-between align-items-center">Port SSH <b>22, 80</b></li>
<li class="list-group-item d-flex justify-content-between align-items-center">Port SSH+SSL <b>143, 443</b></li>
<li class="list-group-item d-flex justify-content-between align-items-center">Port SSH+WS <b>2082</b></li>
<li class="list-group-item d-flex justify-content-between align-items-center">Port SSH+WS(SSL) <b>2083</b></li>
<li class="list-group-item d-flex justify-content-between align-items-center">UDPGW <b>7200, 7300</b></li>
<li class="list-group-item d-flex justify-content-between align-items-center">Proxy (Squid) <b>3128, 8080</b></li>
</ul>
<b>Payload </b>
<textarea id="ssClipboard" class="form-control mb-2 font-italic" rows="3" style="font-size:0.8rem;overflow:hidden">GET / HTTP/1.1[crlf]Host: pl02.sshocean.net[crlf]Upgrade: websocket[crlf][crlf]</textarea>
<button class="d-block btn btn-sm btn-success btn-marketing btn-block rounded-pill" onclick="if (!window.__cfRLUnblockHandlers) return false; copyClipboard()">Copy Payload (HTTP)</button>
<br>
<textarea id="ssClipboards" class="form-control mb-2 font-italic" rows="3" style="font-size:0.8rem;overflow:hidden">GET wss://SNI_bug_host/ HTTP/1.1[crlf]Host: pl02.sshocean.net[crlf]Upgrade: Websocket[crlf]Connection: Keep-Alive[crlf][crlf]</textarea>
<button class="d-block btn btn-sm btn-success btn-marketing btn-block rounded-pill" onclick="if (!window.__cfRLUnblockHandlers) return false; copyClipboards()">Copy Payload (SSL/TLS)</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript"></script>
<script src="https://sshocean.com/assets/js/jquery.qrcode.js" type="text/javascript"></script>
<script src="https://sshocean.com/assets/js/qrcode.js" type="text/javascript"></script>
<script type="text/javascript">
                          function copyClipboard() {
                            var copyText = document.getElementById("ssClipboard");
                            copyText.select();
                            document.execCommand("copy");
                            alert("Copied the clipboard");
                          }

                          function copyClipboards() {
                            var copyText = document.getElementById("ssClipboards");
                            copyText.select();
                            document.execCommand("copy");
                            alert("Copied the clipboard");
                          }
                        </script><br>
</div>
</div>
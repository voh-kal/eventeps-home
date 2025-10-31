<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <iframe src="http://localhost:8000/api/v1/widget/widget-url/MQ==/Nw=="
                                    width="100%"
                                    height="800px"
                                    frameborder="0"
                                    id="select-ticket-iframe">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var iframe = document.getElementById('select-ticket-iframe');
            iframe.onload = function() {
                this.style.height = this.contentWindow.document.body.scrollHeight + 'px';
            };
        });
    </script>
</body>

</html>
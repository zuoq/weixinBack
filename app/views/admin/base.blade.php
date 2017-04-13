<!DOCTYPE html>
<html lang="en">
<head>
	<title>后台管理界面</title>
	@section('meta')
        <meta charset="UTF-8">
    @show
   
    @section("css")
        <link rel="stylesheet" href="/lib/css/bs/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/lib/css/main.css">
    @show
</head>

<body>
	{{--header--}}
    @include("components.header")

    {{--contain--}}
    <div class="container-fluid">
        <div id="content">
            @yield("content")
        </div>
    </div>
</body>
</html>
@extends('app')

@section('content')

	<font color="white">Bienvenido {{ Auth::user()->name }}		</font>	
<center>
<div id="cp_widget_dc25f19d-b698-4011-82a2-288423d2d6eb">...</div><script type="text/javascript">
var cpo = []; cpo["_object"] ="cp_widget_dc25f19d-b698-4011-82a2-288423d2d6eb"; cpo["_fid"] = "AQFAhwMn0PsD";
var _cpmp = _cpmp || []; _cpmp.push(cpo);
(function() { var cp = document.createElement("script"); cp.type = "text/javascript";
cp.async = true; cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
var c = document.getElementsByTagName("script")[0];
c.parentNode.insertBefore(cp, c); })(); </script>



@endsection

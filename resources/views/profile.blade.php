@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="flex justify-center items-center min-h-screen">
    <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-md text-center">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKcAAACUCAMAAADBJsndAAAAb1BMVEX19fUAAAD8/PygoKD4+Pj////f39/s7Ozl5eWCgoLy8vLv7+/ExMQ9PT2lpaWpqak2NjYwMDCRkZG9vb2KiopLS0t8fHzX19dZWVnR0dG1tbUqKipsbGxxcXFQUFDLy8scHBwQEBAjIyNhYWFERET5q3Y7AAAEeElEQVR4nO2c63KqMBCAYd1wERQUhUpVRHz/ZzxwrNNWRZNN2HDO8I3tTP3Tb3LZJJsFx5mYmJiYmPiPQdsCL0AEAaL7tL9wpKYAkVclm/12sVpsm3BZeT6Abal7UEA126fuTz6bdTwXY2pVBCwvn+4jp8VyDqMxBX92eiL5xToYR+8jlB/9li2XpWPfFMHZ1y81W47WmxQhfjYu76lLy1FKJGcJzW6UWp1OMJOzbAnn9kRhLa3pugdromKpoNm2qLCjCVmt5OnOrMx6LFZqmm6d2RCF19H9GWnErynkp/o3OfsQBe/Fkt4Pe8/jhqLpNhFvcMKd5Dr00KC8nhDSNN0ja8fjnKjpuh5jgyIkZE/WKQ9bsmfq8zUoeqpL0TenmG+EQknWbHeifB0PtOB55cC3eEZ7Dc9twDVAMaBPo3bXVLB5FqS1/UbF56mjybcXwUrLM5k8jXou/xFPvvbcaXmWbJ56851tgUcvfW/Tz44tfvqNhuaKb6c8zzU8P/g2oKSz+42Qy7Ld18UaCzxbWOoGKH0ifRaMJ05BH6CsB2ONSJ+wpphwQfXkzSoj9SS35k2Eoa+e/exIOdMhHcSj8YY9r0hIJ7vugjEZ8gV4BM/MwpWHwh3XjdzGDRI6qsG+4e/1DvCPSporzhXzl6ha2o4xUfcgKp/AOdvT7ERlu35VWbrd/BIN5MLoorCq2cX7VzUsN0L7FSIo4ndNeilHURsE0evbj7EUBrXbe5z1TfzLxh9RSRiKqMwfz0znQxKMyLIDwQmyzeWH5CrPvBEVrX2DXUmlX2RlWWY7v/tjhJJfIAKAaH/Gq3gFb9gW6QO7Noz8IPD+EgT+9asx0ZX7enGyDvfHxeepduv6nG6bfJ3EhSPGMuFbSczCj8WzAodTeszL+QhUESKvN8bfSNeF3WCPIkjeV392NDNP2Fo9W8tQPn2THgorpoC7g7TklY94zm4qio1Uh//mUPFGKoC1TLnvI+eDz7exRycjVll1LCOmzgdfdWD+pvFYmlRUOtUMHSnDzSE6KjXJfeRDT3zwqYV1v9l7g4rKHtffkw6ZbAKvNqTpDlnOAjvyLccTTkPVs0BBi+29DJNdJiW6XxMPsIqid3n/jxU5V8a7HiK15LEcK9O1dog6pX/9pIbrvwmXG3KERh9IhbgeyNNo1RUGhiPST3bmRIXeRu41W2M9r1WO/B5TV91DRM6fmIqiSk/BUWiMeKL59fIeIwu90ClSkyM1MJWgqgf3NFKEM2RMunHUXudBr3ZWFu0TKOiUJsqz1fREn0VTe/UUQ8fOG3u9mYS6uQ9Z9HbMWoWeaix1GpT4lCaFvcZjSdQqOgo65dWaBf1qaKQdNB5/VCfX8BzmkPmcM3kiITBqui45Mg2QqXkFeYAOfC66Z0PteGEmdyzLkezJFz07LnOipzPsOfMeao01BibTx++hno/VXxCiB/X1IhBr3A5SID5Jo/xeGF2I75WBktmTmGhi3YX8S54bYlzazXiJiRuRrlaOE+tVThMTExMTExOs/AH3NEYVNwDMdgAAAABJRU5ErkJggg==" alt="Profile Picture" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-dark">
        <h2 class="text-2xl font-bold text-gray-800">{{ session('username') }}</h2>
        <p class="text-gray-600">{{ session('username') }}yhoo.com</p>
    </div>
</div>
@endsection

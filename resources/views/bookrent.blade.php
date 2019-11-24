@extends('layouts.master')
@section('content')
<br>
<br>
<br>
<style>
   body{
        background: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.8) 0%, rgba(26, 79, 104, 0.692) 100%);
        background: linear-gradient(45deg, rgba(255, 255, 255, 0.8)  0%, rgba(26, 79, 104, 0.692) 100%);

        color: #000000; font-size: 16px; font-weight: 400; line-height: 26px; margin: 15px 0;
        text-align:left;

   }
</style>

<div class="container">


        <h1 class="text-center">자료 대출 방법</h1><br><br>

                ① 중앙도서관 홈페이지 [소장자료검색]에서 자료 검색<br>
                ② 서가에서 직접 자료를 찾아 학생증과 함께 1층 대출반납서비스데스크에 제시<br>
                ③ 대출처리 후 반납예정일 확인<br><br>
                [ 관외대출 불가자료]
                참고도서, 지정도서, 연속간행물, 학위논문, 전자매체, 개인문고, 미정리자료, 훼손으로 재제본할 자료

        </div>
        <br>
@endsection

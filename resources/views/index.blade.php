@extends('layouts.main')

@section('title', 'แบบประเมินดัชนีชี้วัดสุขภาพ')

@section('head')

@endsection

@section('content')
<div class="container mt-4">
    <div class="text-center mb-4">
        <img src="{{ asset('images/nd_logo.png') }}" alt="Logo" class="img-fluid mb-3">
        <h4 class="text-primary">
            <b>แบบประเมินดัชนีชี้วัดสุขภาพจิตคนไทยฉบับสั้น</b>
        </h4>
        <p class="text-muted">ฝ่ายการพยาบาล โรงพยาบาลมหาราชนครเชียงใหม่ คณะแพทยศาสตร์ มหาวิทยาลัยเชียงใหม่</p>
    </div>

    @if ($nurse)
        @if ($md === 'ok')
            <div class="alert alert-success text-center">
                <h4>ขอบคุณสำหรับการกรอกแบบประเมิน</h4>
            </div>
        @elseif ($md === 'add')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-primary">เรื่อง ขอความร่วมมือในการตอบแบบประเมิน</h5>
                    <p class="card-text">เรียน {{ $nFullname }}</p>
                    <p class="card-text">
                        &nbsp;&nbsp;&nbsp;&nbsp;ฝ่ายการพยาบาล โรงพยาบาลมหาราชนครเชียงใหม่ คณะแพทยศาสตร์ มหาวิทยาลัยเชียงใหม่ จะทำการประเมินเรื่อง
                        <b>ดัชนีชี้วัดสุขภาพจิตคนไทยฉบับสั้น</b> จึงขอความร่วมมือจากท่านตอบแบบประเมินตามความเป็นจริง ข้อมูลที่ได้จากท่านทั้งหมดจะเป็นความลับ
                    </p>
                    <div class="text-center mt-4">
                        <p>ขอขอบพระคุณทุกท่านที่ให้ความอนุเคราะห์ตอบแบบประเมินมา ณ โอกาสนี้<br>
                            ฝ่ายการพยาบาล โรงพยาบาลมหาราชนครเชียงใหม่</p>
                        <hr>
                        <form name="f" method="post" action="{{ url('newnurse_input') }}">
                            @csrf
                            <input type="hidden" name="nid" value="{{ $nid }}">
                            <input type="hidden" name="r" value="{{ $r }}">
                            <button type="submit" class="btn btn-primary">รับทราบและกรอกแบบประเมิน</button>
                        </form>
                    </div>
                </div>
            </div>
        @elseif ($md === 'edit')
            <div class="alert alert-info text-center">
                <h4>ขอบคุณสำหรับการกรอกแบบประเมิน</h4>
                <p>ท่านได้ทำแบบประเมินไปแล้วเมื่อ {{ $ndate_record }}</p>
            </div>
        @endif
    @else
        <div class="container mt-5">
            <div class="alert alert-danger text-center">
                <h5>ท่านไม่มีสิทธิ์ใช้บริการ</h5>
            </div>
        </div>
    @endif
</div>
@endsection

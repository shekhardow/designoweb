@extends('front/layout')
@section('content')
<div class="mainBody sectionTop boxs">

    <div class="faqSection boxs">
        <div class="container">
            <div class="faqBox boxs">
                <div class="mainSecHeading boxs">
                    <span class="smallSubHeading fontSize18">WE HELP YOU OUT</span>
                    <h1 class="fontSize48 boxs">Frequently Asked <br>Question</h1>
                </div>
                <div class="faqDetail boxs">
                    <div class="faqLists boxs">
                        <?php
                        // $faqsloop = CFS()->get('faqs_list');
                        // foreach ((array) $faqsloop as $faqsList) {

                        //     echo '<div class="faqList boxs">';
                        //     echo '<div class="faqListInner boxs">';
                        //     echo     '<span class="faqQuestion faqSecList fontSize22 boxs">';
                        //     echo         '<a class="faqQuestLink" href="javascript:void(0)">';
                        //     echo             '<span class="faqQuest"> ' . $faqsList['faq_question'] . ' </span>';
                        //     echo             '<span class="arrowIcon"><i class="fas fa-chevron-down"></i></span>';
                        //     echo         '</a>';
                        //     echo     '</span>';
                        //     echo     '<span class="faqAnswer faqSecList fontSize18 boxs">';
                        //     echo         '<span> ' . $faqsList['faq_answer'] . ' </span>';
                        //     echo     '</span>';
                        //     echo '</div>';
                        //     echo '</div>';
                        // }
                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
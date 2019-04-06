<template>
  <div id="app">
    <section class="section_main">
        <div class="title_area">
            <h1><em>코딩공장</em>공장장 정준희<em>개발노트</em></h1>
            <div class="css_drawing_area"></div>
        </div>
    </section>
    <section class="section_project_list">
        <div class="section_inner">
            <h2 class="section_title">Project</h2>
            <div class="modal pop">
                <div class="info_area">
                    <div class="badge_area">
                        <span class="badge_web">Web</span>
                        <span class="badge_mobile_web">Mobile Web</span>
                    </div>
                    <a href="#" class="title web_link">Travel Maker</a>
                    <a href="#" class="btn_close" role="button"><span class="blind">닫기</span></a>
                    <p class="intro_text">여행 가이드와 여행자 매칭 서비스 제공 및 여행 설계 사이트 입니다.</p>
                    <dl class="info_list">
                        <dt>담당</dt>
                        <dd>프론트엔드 / 백엔드 개발</dd>
                        <dt>개발기간</dt>
                        <dd>2019.02. ~ 2019.04 현재 모바일 웹 개발 진행중</dd>
                        <dt>사용언어</dt>
                        <dd>php, MySQL, html, css, javascript, jQuery</dd>
                    </dl>
                </div>
                <div class="detail_info_area">
                    <div class="thumb_area">
                        <div class="thumb_list_wrap">
                            <ul class="thumb_list">
                                <li class="thumb_item">
                                    <div class="inner">
                                        <span class="tag">메인</span>
                                        <img src="#" alt="메인 썸네일">
                                    </div>
                                </li>
                                <li class="thumb_item">
                                    <div class="inner">
                                        <span class="tag">메인</span>
                                        <img src="#" alt="메인 썸네일">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="text_area">
                        <ul class="detail_info_list">
                            <li class="detail_info_item">
                                <p>그누보드 기반 DB 설계</p>
                            </li>
                            <li class="detail_info_item">
                                <p>GET/POST 방식 전송 Data, AJAX 사용하여 업데이트</p>
                            </li>
                            <li class="detail_info_item">
                                <p>ajax Data PHP 코드로 변환하여 mysql 쿼리문에 적용</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="project_list_wrap">
                <ul class="project_list">
                    <li class="project_item">
                        <a href="#" class="inner_link" style="background-image:url('https://www.travelmaker.co.kr/img/html/imgs/images/img_intro02.jpg');">
                            <div class="badge_area">
                                <span class="badge_web">Web</span>
                                <span class="badge_mobile_web">MOBILE WEB</span>
                            </div>
                            <strong class="title">Travel Maker</strong>
                            <div class="info">
                                <span class="company">허브디앤씨</span>
                                <span class="date">19.02 ~ 19.03</span>
                            </div>
                        </a>
                    </li>
                    <li class="project_item">
                        <a href="#" class="inner_link">
                            <div class="badge_area">
                                <span class="badge_web_app">WEB APP</span>
                            </div>
                            <strong class="title">아들에날린</strong>
                            <div class="info">
                                <span class="company">허브디앤씨</span>
                                <span class="date">19.12 ~ 19.02</span>
                            </div>
                        </a>
                    </li>
                    <li class="project_item">
                        <a href="#" class="inner_link">
                            <div class="badge_area">
                                <span class="badge_web">WEB</span>
                            </div>
                            <strong class="title">하우스머치</strong>
                            <div class="info">
                                <span class="company">허브디앤씨</span>
                                <span class="date">19.12 ~ 19.12</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'app',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
}
</script>

<style>

</style>

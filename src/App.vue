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
                    <li class="project_item" v-for="(project, index) in projects">
                        <a :href="project.link" class="inner_link" :style="{'background-image':'url(' + projectImgUrl + project.bg + ')'}">
                            <div class="badge_area">
                                <span class="badge_web" v-if="project.web === 'Y'">WEB</span>
                                <span class="badge_mobile_web" v-if="project.mobile === 'Y'">MOBILE WEB</span>
                                <span class="badge_badge_web_app" v-if="project.responsive === 'Y'">RESPONSIVE</span>
                                <span class="badge_badge_web_app" v-if="project.app === 'Y'">WEB APP</span>
                                <span class="badge_personal" v-if="project.personal === 'Y'">개인프로젝트</span>
                            </div>
                            <strong class="title">{{project.name}}</strong>
                            <div class="info">
                                <span class="company" v-if="project.company !== ''">허브디앤씨</span>
                                <span class="date">{{project.date}}</span>
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
      'msgEmail': '',
      'msgPhone': '',
      'msgValue': '',
      'projectImgUrl': './assets/',
      'projects': [
        {'no': '0', 'name': '트래블메이커', 'company': '허브디앤씨', 'link': '#', 'bg': '', 'web':'Y', 'mobile':'Y', 'responsive': 'N', 'app': 'N', 'personal': 'N', 'date': '2019.02.07 ~ 유지보수중'},
        {'no': '1', 'name': '아들에 날린', 'company': '허브디앤씨', 'link': '#', 'bg': '', 'web':'N', 'mobile':'N', 'responsive': 'N', 'app': 'Y', 'personal': 'N', 'date': '2018.12.27 - 2019.01.31'},
        {'no': '2', 'name': '하우스머치', 'company': '허브디앤씨', 'link': '#', 'bg': '', 'web':'Y', 'mobile':'N', 'responsive': 'N', 'app': 'N', 'personal': 'N', 'date': '2018.12.17 - 2018.12.21'},
        {'no': '3', 'name': '스마트 스코어 project(출시 예정)', 'company': '허브디앤씨', 'link': '#', 'bg': '', 'web':'N', 'mobile':'N', 'responsive': 'N', 'app': 'Y', 'personal': 'N', 'date': '2018.11.15 - 2018.12.21'},
        {'no': '4', 'name': 'Troye Sivan Fan Page', 'company': '', 'link': '#', 'bg': '', 'web':'N', 'mobile':'N', 'responsive': 'Y', 'app': 'N', 'personal': 'Y', 'date': '2018.06.02 - 2018.06.08'},
        {'no': '5', 'name': 'Fontamazing', 'company': '', 'link': '#', 'bg': '', 'web':'N', 'mobile':'N', 'responsive': 'Y', 'app': 'N', 'personal': 'Y', 'date': '2018.07.25 - 2018.07.26'},
        {'no': '6', 'name': 'Izakaya Heekare', 'company': '', 'link': '#', 'bg': '', 'web':'N', 'mobile':'N', 'responsive': 'Y', 'app': 'N', 'personal': 'Y', 'date': '2018.09.16 - 2018.09.19'},
        {'no': '7', 'name': 'Family Restaurant Ashley', 'company': '', 'link': '#', 'bg': '', 'web':'Y', 'mobile':'N', 'responsive': 'N', 'app': 'N', 'personal': 'Y', 'date': '2018.06.12 - 2018.06.20'},
        {'no': '8', 'name': 'Vincent van Gogh Gallery', 'company': '', 'link': '#', 'bg': '', 'web':'Y', 'mobile':'N', 'responsive': 'N', 'app': 'N', 'personal': 'Y', 'date': '2018.05.23 - 2018.05.30'}
      ],
      'skills': [
        {'no': '0', 'name': 'HTML', 'content': '웹표준, 웹접근성 마크업 가능'},
        {'no': '1', 'name': 'CSS', 'content': '반응형 웹, Cross Browsing 구현 가능'},
        {'no': '2', 'name': 'SASS', 'content': '변수와 mixin, import 사용'},
        {'no': '3', 'name': 'JavaScript', 'content': 'ECMA 2015 문법 구현 가능'},
        {'no': '4', 'name': 'Vue.js', 'content': 'SPA 구현, Instance Lifecycle 이해/개발활용'},
        {'no': '5', 'name': 'jQuery', 'content': 'plugin 개발활용/Costom 하여 구현'},
        {'no': '6', 'name': 'PHP', 'content': '그누보드를 이용한 Project 개발'},
        {'no': '7', 'name': 'MySQL ', 'content': 'Date insert,update 및 union 등을 이용한 select 쿼리문 작성'},
        {'no': '8', 'name': 'Github', 'content': '협업을 위한 Branch 생성 및 merge/기타 Branch 관리'},
        {'no': '9', 'name': 'webpack, Gulp', 'content': '개발속도 향상을 위한 plugin 설정'},
        {'no': '10', 'name': 'Illustrator', 'content': 'Pentool의 능숙한 사용으로 icon 및 logo 제작 가능'},
        {'no': '11', 'name': 'Photoshop', 'content': 'Web site Banner/page 제작 가능'}
      ],
      'modalpop': {
        'title': [
          {'no': '0', 'name': '트래블메이커', 'content1': '하하하하하 재밌쩡'},
          {'no': '1', 'name': '아들에 날린', 'content1': '하하하하하 재밌쩡'},
          {'no': '2', 'name': '하우스머치', 'content1': '하하하하하 재밌쩡'},
          {'no': '3', 'name': '스마트 스코어 project(출시 예정)', 'content1': '하하하하하 재밌쩡'},
          {'no': '4', 'name': 'Troye Sivan Fan Page', 'content1': '하하하하하 재밌쩡'},
          {'no': '5', 'name': 'Fontamazing', 'content1': '하하하하하 재밌쩡'},
          {'no': '6', 'name': 'Izakaya Heekare', 'content1': '하하하하하 재밌쩡'},
          {'no': '7', 'name': 'Family Restaurant Ashley', 'content1': '하하하하하 재밌쩡'},
          {'no': '8', 'name': 'Vincent van Gogh Gallery', 'content1': '하하하하하 재밌쩡'}
        ],
        'img': [
          {'no': '0', 'name': '트래블메이커', 'content1': '하하하하하 재밌쩡'},
          {'no': '1', 'name': '아들에 날린', 'content1': '하하하하하 재밌쩡'},
          {'no': '2', 'name': '하우스머치', 'content1': '하하하하하 재밌쩡'},
          {'no': '3', 'name': '스마트 스코어 project(출시 예정)', 'content1': '하하하하하 재밌쩡'},
          {'no': '4', 'name': 'Troye Sivan Fan Page', 'content1': '하하하하하 재밌쩡'},
          {'no': '5', 'name': 'Fontamazing', 'content1': '하하하하하 재밌쩡'},
          {'no': '6', 'name': 'Izakaya Heekare', 'content1': '하하하하하 재밌쩡'},
          {'no': '7', 'name': 'Family Restaurant Ashley', 'content1': '하하하하하 재밌쩡'},
          {'no': '8', 'name': 'Vincent van Gogh Gallery', 'content1': '하하하하하 재밌쩡'}],
        'infor': [
          {'no': '0', 'name': '트래블메이커', 'content1': '하하하하하 재밌쩡'},
          {'no': '1', 'name': '아들에 날린', 'content1': '하하하하하 재밌쩡'},
          {'no': '2', 'name': '하우스머치', 'content1': '하하하하하 재밌쩡'},
          {'no': '3', 'name': '스마트 스코어 project(출시 예정)', 'content1': '하하하하하 재밌쩡'},
          {'no': '4', 'name': 'Troye Sivan Fan Page', 'content1': '하하하하하 재밌쩡'},
          {'no': '5', 'name': 'Fontamazing', 'content1': '하하하하하 재밌쩡'},
          {'no': '6', 'name': 'Izakaya Heekare', 'content1': '하하하하하 재밌쩡'},
          {'no': '7', 'name': 'Family Restaurant Ashley', 'content1': '하하하하하 재밌쩡'},
          {'no': '8', 'name': 'Vincent van Gogh Gallery', 'content1': '하하하하하 재밌쩡'}
        ]
      }
    }
  },
  updated() {

  },
  methods: {
    test() {
      console.log(this.modalpop)
    },
    msgSend() {
      this.$axios({
        method: 'POST',
        url: './model/ajax.php',
        data: { 
          msgcontent: this.msgContent,
          msgemail: this.msgEmail,
          msgphone: this.msgPhone
        }
      })
      .then((response) => {
        console.log(response.data)
        alert('연락 주셔서 감사합니다.\nmessage는 정상적으로 발송되었습니다.')
        this.msgContent = ''
        this.msgEmail = ''
        this.msgPhone = ''
      })
      .catch((ex) => {
        console.log(ex)
      })
    }
  }
}
// document.addEventListener("DOMContentLoaded", function(){
//   let MT = document.getElementById('maintext')
//   let textContent = 'ㅇ.아.안.안ㄴ.안녀.안녕.안녕ㅎ.안녕하.안녕하ㅅ.안녕하세.안녕하세ㅇ.안녕하세요'
//   let mainContent = textContent.split('.')
//   let contentCount = 0

//   let startInterval = setInterval(function() {
//     MT.innerHTML = mainContent[contentCount]
//     contentCount++
//     if (contentCount == mainContent.length) {
//       clearInterval(startInterval)
//     }
//   }, 100)
// });
</script>

<style>

</style>

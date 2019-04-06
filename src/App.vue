<template>
  <div id="app">
    <section class="section_main">
      <div class="title_area">
        <h1 id="maintext">
          <!-- <em>코딩공장</em>공장장 정준희
          <em>개발노트</em> -->
        </h1>
        <div class="css_drawing_area"></div>
      </div>
    </section>
    <section class="section_project_list">
      <div class="section_inner">
        <h2 class="section_title">Project</h2>
        <div class="dimmed" v-show="this.pop" @click="modalPopClose()">
          <div class="modal">
            <div class="info_area">
              <div class="badge_area">
                <span class="badge_web" v-if="detailList.web">WEB</span>
                <span class="badge_mobile_web" v-if="detailList.mobile">MOBILE WEB</span>
                <span class="badge_responsive" v-if="detailList.responsive">RESPONSIVE WEB</span>
                <span class="badge_web_app" v-if="detailList.app">WEB APP</span>
                <span class="badge_personal" v-if="detailList.personal">개인프로젝트</span>
              </div>
              <a :href="detailList.link" class="title web_link" target="_blank">{{detailList.name}}</a>
              <a href="#" class="btn_close" role="button">
                <span class="blind">닫기</span>
              </a>
              <p class="intro_text">{{detailList.infor}}</p>
              <dl class="info_list">
                <dt>담당</dt>
                <dd>{{detailList.role}}</dd>
                <dt>개발기간</dt>
                <dd>{{detailList.date}}</dd>
                <dt>사용언어</dt>
                <dd v-html="detailList.language"></dd>
              </dl>
            </div>
            <div class="description_area">
                <ul class="description_list">
                    <li>
                        <div class="description_title">
                            <span class="no">01</span>
                            <em>메인 페이지</em>
                        </div>
                        <p class="description">그누보드 기반 DB 설계</p>
                        <p class="description">PHP를 이용한 캐쉬삭제</p>
                        <p class="description">GET/POST 방식 전송 Data, AJAX 사용하여 업데이트</p>
                        <div class="image_area">
                            <span class="tag"></span>
                            <div class="img_wrap">
                                <img src="img/capture.jpg" alt="임시이미지">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="link_area">
                <a href="#" class="link_website">프로젝트 보기</a>
            </div>
          </div>
        </div>
        <div class="project_list_wrap">
          <ul class="project_list">
            <li class="project_item" v-for="(project, index) in projects">
              <a href="javascript:void(0)" class="inner_link" :style="{'background-image':'url(' + projectImgUrl + project.bg + ')'}" @click="modalPop(project.no)">
                <div class="badge_area">
                  <span class="badge_web" v-if="project.web">WEB</span>
                  <span class="badge_mobile_web" v-if="project.mobile">MOBILE WEB</span>
                  <span class="badge_responsive" v-if="project.responsive">RESPONSIVE WEB</span>
                  <span class="badge_web_app" v-if="project.app">WEB APP</span>
                  <span class="badge_personal" v-if="project.personal">개인프로젝트</span>
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
  name: "app",
  data() {
    return {
      pop: false,
      msgEmail: "",
      msgPhone: "",
      msgValue: "",
      projectImgUrl: "./assets/",
      projects: [
        {
          no: "0",
          name: "트래블메이커",
          company: "허브디앤씨",
          bg: "",
          web: true,
          mobile: true,
          date: "2019.02.07 ~ 유지보수중"
        },
        {
          no: "1",
          name: "아들에 날린",
          company: "허브디앤씨",
          bg: "",
          app: true,
          date: "2018.12.27 - 2019.01.31"
        },
        {
          no: "2",
          name: "하우스머치",
          company: "허브디앤씨",
          bg: "",
          web: true,
          date: "2018.12.17 - 2018.12.21"
        },
        {
          no: "3",
          name: "스마트 스코어 project(출시 예정)",
          company: "허브디앤씨",
          bg: "",
          app: true,
          date: "2018.11.15 - 2018.12.21"
        },
        {
          no: "4",
          name: "Troye Sivan Fan Page",
          company: "",
          bg: "",
          responsive: true,
          personal: true,
          date: "2018.06.02 - 2018.06.08"
        },
        {
          no: "5",
          name: "Fontamazing",
          company: "",
          bg: "",
          responsive: true,
          personal: true,
          date: "2018.07.25 - 2018.07.26"
        },
        {
          no: "6",
          name: "Izakaya Heekare",
          company: "",
          bg: "",
          responsive: true,
          personal: true,
          date: "2018.09.16 - 2018.09.19"
        },
        {
          no: "7",
          name: "Family Restaurant Ashley",
          company: "",
          bg: "",
          web: true,
          personal: true,
          date: "2018.06.12 - 2018.06.20"
        },
        {
          no: "8",
          name: "Vincent van Gogh Gallery",
          company: "",
          bg: "",
          web: true,
          personal: true,
          date: "2018.05.23 - 2018.05.30"
        }
      ],
      skills: [
        { no: "0", name: "HTML", content: "웹표준, 웹접근성 마크업 가능" },
        {
          no: "1",
          name: "CSS",
          content: "반응형 웹, Cross Browsing 구현 가능"
        },
        { no: "2", name: "SASS", content: "변수와 mixin, import 사용" },
        { no: "3", name: "JavaScript", content: "ECMA 2015 문법 구현 가능" },
        {
          no: "4",
          name: "Vue.js",
          content: "SPA 구현, Instance Lifecycle 이해/개발활용"
        },
        {
          no: "5",
          name: "jQuery",
          content: "plugin 개발활용/Costom 하여 구현"
        },
        { no: "6", name: "PHP", content: "그누보드를 이용한 Project 개발" },
        {
          no: "7",
          name: "MySQL ",
          content: "Date insert,update 및 union 등을 이용한 select 쿼리문 작성"
        },
        {
          no: "8",
          name: "Github",
          content: "협업을 위한 Branch 생성 및 merge/기타 Branch 관리"
        },
        {
          no: "9",
          name: "webpack, Gulp",
          content: "개발속도 향상을 위한 plugin 설정"
        },
        {
          no: "10",
          name: "Illustrator",
          content: "Pentool의 능숙한 사용으로 icon 및 logo 제작 가능"
        },
        {
          no: "11",
          name: "Photoshop",
          content: "Web site Banner/page 제작 가능"
        }
      ],
      detailList: {
        no: '', 
        name: '',
        link: '',
        infor: '',
        web: '',
        mobile: '',
        responsive: '',
        app: '',
        personal: '',
        role: '',
        date: '',
        language: ''
      },
      projectDetail: {
        title: [
          { no: "0", 
            name: "트래블메이커",
            link: 'https://www.travelmaker.co.kr/',
            infor: '여행 가이드와 여행자의 매칭 사이트입니다.',
            web: true,
            mobile: true,
            responsive: false,
            app: false,
            personal: false,
            role: '프론트엔드 / 백엔드',
            date: "2019.02. ~ 현재 모바일 웹 개발 진행중",
            language: '<em>JavaScript</em>, <em>PHP</em>, <em>MySQL</em>, HTML, CSS, jQuery'
          },
          { no: "1",
            name: "아들에 날린",
            link: 'javascript:void(0)',
            infor: '군입대자와 지인들을 이어주는 앱입니다.',
            web: false,
            mobile: false,
            responsive: false,
            app: true,
            personal: false,
            role: '프론트엔드 / 백엔드',
            date: "2018.12.27 - 2019.01.31",
            language: '<em>JavaScript</em>, <em>그누보드</em>, HTML, CSS, jQuery, PHP, MySQL'
          },
          { no: "2",
            name: "하우스머치",
            link: 'https://www.howsmuch.com/',
            infor: '부동산 시세비교/매물 사이트입니다.',
            web: true,
            mobile: false,
            responsive: false,
            app: false,
            personal: false,
            role: '프론트엔드 / 백엔드',
            date: "2018.12.17 - 2018.12.21",
            language: '<em>JavaScript</em>, <em>DAUM map API</em>, HTML, CSS, jQuery, PHP, MySQL'
          },
          {
            no: "3",
            name: "스마트 스코어 project(출시 예정)",
            link: 'javascript:void(0)',
            infor: '골프장 예약/매칭 앱입니다.',
            web: false,
            mobile: false,
            responsive: false,
            app: true,
            personal: false,
            role: '프론트엔드 / 백엔드',
            date: "2018.11.15 - 2018.12.21",
            language: '<em>Vue.js</em>, <em>JavaScript</em>, HTML, CSS, PHP, MySQL'
          },
          {
            no: "4",
            name: "Troye Sivan Fan Page",
            link: 'http://www.jooninim.com/project/singerFanSite-master/singerFanSite-master/index.html',
            infor: "원 페이지 형식으로 제작한 '트로이 시반' 가수 팬 페이지입니다.",
            web: false,
            mobile: false,
            responsive: true,
            app: false,
            personal: true,
            role: '퍼블리싱 / 디자인',
            date: "2018.06.02 - 2018.06.08",
            language: '<em>JavaScript</em>, <em>반응형_웹</em>, HTML, CSS, jQuery'
          },
          { no: "5",
            name: "Fontamazing",
            link: 'http://www.jooninim.com/project/fontChangeWebPage-master/fontChangeWebPage-master/index.html',
            infor: 'Vuejs로 만든 웹페이지입니다.',
            web: false,
            mobile: false,
            responsive: true,
            app: false,
            personal: true,
            role: '퍼블리싱 / 디자인',
            date: "2018.07.25 - 2018.07.26",
            language: '<em>Vue.js</em>, <em>JavaScript</em>, <em>반응형_웹</em>, HTML, CSS, jQuery'
          },
          { no: "6",
            name: "Izakaya Heekare",
            link: 'http://www.jooninim.com/project/IzakayWebPage-master/IzakayWebPage-master/index.html',
            infor: 'SASS로 css를 제작한 페이지입니다.',
            web: false,
            mobile: false,
            responsive: true,
            app: false,
            personal: true,
            role: '퍼블리싱 / 디자인',
            date: "2018.09.16 - 2018.09.19",
            language: '<em>GULP</em>, <em>JavaScript</em>, <em>jquery.ui.touch-punch.min.js</em>, <em>google map API</em>, <em>SASS</em>, HTML, CSS, jQuery, 반응형_웹'
          },
          {
            no: "7",
            name: "Family Restaurant Ashley",
            link: 'http://www.jooninim.com/project/ashleySite-master/ashleySite-master/index.html',
            infor: '풀 페이지 형식으로 제작한 애슐리 레스토랑 사이트입니다.',
            web: true,
            mobile: false,
            responsive: false,
            app: false,
            personal: true,
            role: '퍼블리싱 / 디자인',
            date: "2018.06.12 - 2018.06.20",
            language: '<em>JavaScript</em>, <em>google_map_API</em>, <em>Flickity slide</em>, HTML, CSS, jQuery'
          },
          {
            no: "8",
            name: "Vincent van Gogh Gallery",
            link: 'http://www.jooninim.com/project/elevatorPortfolio-master/elevatorPortfolio-master/index.html',
            infor: '제이쿼리를 사용하여 역동적인 풀페이지 사이트입니다.',
            web: true,
            mobile: false,
            responsive: false,
            app: false,
            personal: true,
            role: '퍼블리싱 / 디자인',
            date: "2018.05.23 - 2018.05.30",
            language: '<em>JavaScript</em>, <em>jquery.eraser.js</em>, HTML, CSS, jQuery'
          }
        ],
        img: [
        ],
        infor: [
        ]
      }
    };
  },
  updated() {},
  methods: {
    modalPop(idx) {
        this.pop = true
        this.detailList.no = this.projectDetail.title[idx].no
        this.detailList.name = this.projectDetail.title[idx].name
        this.detailList.link = this.projectDetail.title[idx].link
        this.detailList.infor = this.projectDetail.title[idx].infor
        this.detailList.web = this.projectDetail.title[idx].web
        this.detailList.mobile = this.projectDetail.title[idx].mobile
        this.detailList.responsive = this.projectDetail.title[idx].responsive
        this.detailList.app = this.projectDetail.title[idx].app
        this.detailList.personal = this.projectDetail.title[idx].personal
        this.detailList.role = this.projectDetail.title[idx].role
        this.detailList.date = this.projectDetail.title[idx].date
        this.detailList.language = this.projectDetail.title[idx].language
        var bodySelect = document.querySelector('body')
        bodySelect.style.overflow = 'hidden'
    },
    modalPopClose() {
      if (event.target.className === 'dimmed') {
        this.pop = false
        var bodySelect = document.querySelector('body')
        bodySelect.style.overflow = 'auto'
      }
    },
    msgSend() {
      this.$axios({
        method: "POST",
        url: "./model/ajax.php",
        data: {
          msgcontent: this.msgContent,
          msgemail: this.msgEmail,
          msgphone: this.msgPhone
        }
      })
        .then(response => {
          console.log(response.data);
          alert(
            "연락 주셔서 감사합니다.\nmessage는 정상적으로 발송되었습니다."
          );
          this.msgContent = "";
          this.msgEmail = "";
          this.msgPhone = "";
        })
        .catch(ex => {
          console.log(ex);
        });
    }
  }
};
document.addEventListener("DOMContentLoaded", function(){
  let MT = document.getElementById('maintext')
  let textContent = '_.._..ㅋ.코.콛.코디.코딩.코딩ㄱ.코딩고.코딩공.코딩공ㅈ.코딩공자.코딩공장.코딩공장 '// <em>코딩공장</em>공장장 정준희 <em>개발노트</em>
  let mainContent = textContent.split('.')
  let contentCount = 0

  let startInterval = setInterval(function() {
    MT.innerHTML = mainContent[contentCount]
    contentCount++
    if (contentCount == mainContent.length) {
      clearInterval(startInterval)
    }
    console.log('zz')
  }, 200)
});
</script>

<style>
</style>

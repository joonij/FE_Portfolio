<template>
  <div id="app">
    <section class="section_main">
      <div class="title_area">
        <h1 id="maintext">
          <!-- <em><em>코딩공장</em></em>공장장 정준희<em><em>개발노트</em> -->
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
              <a href="javascript:void(0)" class="btn_close" role="button" @click="modalPopClose()">
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
              <div class="description_title">
                  <strong>주요기능</strong>
              </div>
              <ul class="description_list">
                  <li class="description" v-for="content in detailList.content" v-html="content"></li>
              </ul>
              <div class="img_area">
                <img :src="projectImgUrl + detailList.imgsrc" :alt="detailList.imgalt">
              </div>
            </div>
            <div class="link_area">
                <a :href="detailList.link" class="link_website" target="_blank">프로젝트 보기</a>
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
    <section class="section_contact">
        <div class="section_inner">
            <h2 class="section_title">Contact</h2>
            <div class="contact_wrap">
              <div class="profile_area">
                  <div class="photo_area">
                      <img src="http://image.chosun.com/sitedata/image/201712/03/2017120301005_0.jpg" alt="류준열">
                  </div>
                  <p class="introduce">확장성 좋은 프론트엔드 개발자 정준희 입니다.</p>
                  <p class="email_info">joonij93@gmail.com</p>
              </div>
              <div class="message_area">
                  <div class="email_area">
                      <label for="e_mail"><em>*</em>이메일</label>
                      <input id="e_mail" type="text" name="e-mail" placeholder="(필수)joonij93@gmail.com"/>
                  </div>
                  <div class="phone_number_area">
                      <label for="phone_number">연락처</label>
                      <input id="phone_number" type="text" name="phone"/>
                  </div>
                  <div class="message_input_area">
                      <label for="message"><em>*</em>메시지</label>
                      <textarea id="message" name="text-message" placeholder="(필수)메세지를 입력해주세요."></textarea>
                  </div>
                  <button type="submit" class="btn_send">보내기</button>
              </div>
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
      projectImgUrl: "./src/assets/",
      projects: [
        {
          no: "0",
          name: "Travelmaker",
          company: "허브디앤씨",
          bg: "thumb_travelmaker.png",
          web: true,
          mobile: true,
          date: "2019.02.07 ~ 유지보수중"
        },
        {
          no: "1",
          name: "아들에날린",
          company: "허브디앤씨",
          bg: "thumb_adle.png",
          app: true,
          date: "2018.12.27 - 2019.01.31"
        },
        {
          no: "2",
          name: "Howsmuch",
          company: "허브디앤씨",
          bg: "thumb_howsmuch.png",
          web: true,
          date: "2018.12.17 - 2018.12.21"
        },
        {
          no: "3",
          name: "SmartScore(출시 예정)",
          company: "허브디앤씨",
          bg: "thumb_golf.png",
          app: true,
          date: "2018.11.15 - 2018.12.21"
        },
        {
          no: "4",
          name: "Troye Sivan Fan Page",
          company: "",
          bg: "thumb_troyesivan.png",
          responsive: true,
          personal: true,
          date: "2018.06.02 - 2018.06.08"
        },
        {
          no: "5",
          name: "Fontamazing",
          company: "",
          bg: "thumb_fontamazing.png",
          responsive: true,
          personal: true,
          date: "2018.07.25 - 2018.07.26"
        },
        {
          no: "6",
          name: "Izakaya Heekare",
          company: "",
          bg: "thumb_heekare.png",
          responsive: true,
          personal: true,
          date: "2018.09.16 - 2018.09.19"
        },
        {
          no: "7",
          name: "Family Restaurant Ashley",
          company: "",
          bg: "thumb_ashley.png",
          web: true,
          personal: true,
          date: "2018.06.12 - 2018.06.20"
        },
        {
          no: "8",
          name: "Vincent van Gogh Gallery",
          company: "",
          bg: "thumb_gogh.png",
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
        language: '',
        content: '',
        imgsrc: '',
        imgalt: ''
      },
      projectDetail: {
        title: [
          { no: "0", 
            name: "Travelmaker",
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
            name: "아들에날린",
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
            name: "Howsmuch",
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
            name: "SmartScore(출시 예정)",
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
          {
            src: 'img_travelmaker.png',
            alt: '트래블메이커 대표이미지'
          },
          {
            src: 'img_adul.png',
            alt: '아들에날린 대표이미지'
          },
          {
            src: 'img_howsmuch.png',
            alt: '하우스머치 대표이미지'
          },
          {
            src: 'img_smartscore.png',
            alt: '스마트스코어 대표이미지'
          },
          {
            src: 'img_TroyeSivan.png',
            alt: '트로이시반 대표이미지'
          },
          {
            src: 'img_Fontamazing.png',
            alt: '폰트어메이징 대표이미지'
          },
          {
            src: 'img_Heekare.png',
            alt: '히카리 대표이미지'
          },
          {
            src: 'img_Ashley.png',
            alt: '애슐리 대표이미지'
          },
          {
            src: 'img_vanGogh.png',
            alt: '고흐겔러리 대표이미지'
          },
        ],
        content: [
          {
            0: '그누보드 기반 DB 설계',
            1: 'PHP를 이용 cache 삭제 구현',
            2: 'AJAX GET/POST 방식 Data 전송, JSON 변환하여 Page Rendering / PHP 코드로 변환하여 mysql query 작성',
            3: 'mysql query 사용 DB 저장',
            4: '<em>네이버 smtp 적용 / 특정 Event 자동 mail 송신 구현</em>',
            5: 'iframe Tag 사용 유튜브 동영상 적용',
            6: '<em>kg 이니시스 결제 Module 적용</em>',
            7: '<em>google map 적용</em><br/>- Marker별 좌표 저장하여 지도 Drag Event시 보이는 지도안에 Marker 표시 구현<br/>- 보이는 좌표 저장하여 Filtering시 저장된 좌표에 표시<br/>- geocoding 사용 text 검색 위치 찾기 구현',
            8: 'SNS login 구현',
            9: '<em>Javascript만 사용하여 실시간 message 기능 구현</em>',
            10: 'jquery datepicker 적용',
            11: 'fullcalendar 사용 jquery datepicker 특정일 비활성화 구현'
          },
          {
            0: '그누보드 기반 DB 설계',
            1: 'AJAX GET/POST 방식 Data 전송, JSON 변환하여 Page Rendering / PHP 코드로 변환하여 mysql query 작성',
            2: 'mysql query 사용 DB 저장',
            3: '<em>Tesseract.js OCR 사용 글자인식 구현</em>'
          },
          {
            0: 'AJAX GET/POST 방식 Data 전송, JSON 변환하여 Page Rendering / PHP 코드로 변환하여 mysql query 작성',
            1: 'mysql query 사용 DB 저장',
            2: '<em>DAUM map api 적용</em><br/>- Marker별 좌표 저장하여 지도 Drag Event시 보이는 지도안에 Marker 표시 구현<br/>- 위치 검색하여 지도 좌표값 불러오기<br/>- Marker icon custom 적용<br/>- Marker hover 시 Marker info와 함께 색 변화'
          },
          {
            0: '<em>vue.js 사용 SPA 개발</em>',
            1: 'axios GET/POST 방식 Data 전송, JSON 변환하여 Page Rendering / PHP 코드로 변환하여 mysql query 작성',
            2: 'mysql query 사용 DB 저장',
            3: '<em>transition을 사용한 stylish component 변환</em>',
            4: '<em>webpack을 이용한 개발환경 개선</em>'
          },
          {
            0: 'video tag 사용 background 동영상 진행',
            1: '<em>javascript 이용 음악재생/정지</em>',
            2: '<em>css만 사용 물결 표시</em>'
          },
          {
            0: '<em>vue.js의 Directive 이용 Font별 글씨 표시</em>',
            1: '<em>reload icon click Event시 font배열 random 변환</em>'
          },
          {
            0: 'jquery.ui.touch-punch.min.js 이용 mouse drag Event 구현',
            1: '<em>SASS를 이용 CSS 처리</em>',
            2: '<em>GULP를 이용 SASS 빌드</em>',
            3: 'google map api 이용 Marker 표시'
          },
          {
            0: '<em>Flickity slide를 이용 Main slide 구현</em>',
            1: 'google map api 사용',
            2: '저장된 좌표배열 지도에 표시'
          },
          {
            0: '<em>jquery.eraser.js 이용 canvas tag 지우기 효과</em><br/>(IE에선 지원을 안함으로 클릭으로 대체)'
          }
        ]
      }
    };
  },
  methods: {
    modalPop(idx) {
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
        this.detailList.content = this.projectDetail.content[idx]
        this.detailList.imgsrc = this.projectDetail.img[idx].src
        this.detailList.imgalt = this.projectDetail.img[idx].alt
        this.pop = true
        var bodySelect = document.querySelector('body')
        bodySelect.style.overflow = 'hidden'
    },
    modalPopClose() {
      if (event.target.className === 'dimmed' || event.target.className === 'btn_close') {
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
  let textContent = '_.._..<em>ㅋ</em>.<em>코</em>.<em>콛</em>.<em>코디</em>.<em>코딩</em>.<em>코딩ㄱ</em>.<em>코딩고</em>.<em>코딩공</em>.<em>코딩공ㅈ</em>.<em>코딩공자</em>.<em>코딩공장</em>.<em>코딩공장</em>ㄱ.<em>코딩공장</em>고.<em>코딩공장</em>공.<em>코딩공장</em>공ㅈ.<em>코딩공장</em>공자.<em>코딩공장</em>공장.<em>코딩공장</em>공장ㅈ.<em>코딩공장</em>공장자.<em>코딩공장</em>공장장.<em>코딩공장</em>공장장 .<em>코딩공장</em>공장장 ㅈ.<em>코딩공장</em>공장장 저.<em>코딩공장</em>공장장 정.<em>코딩공장</em>공장장 정ㅈ.<em>코딩공장</em>공장장 정주.<em>코딩공장</em>공장장 정준.<em>코딩공장</em>공장장 정줂.<em>코딩공장</em>공장장 정준흐.<em>코딩공장</em>공장장 정준희.<em>코딩공장</em>공장장 정준희<em>ㄱ</em>.<em>코딩공장</em>공장장 정준희<em>개</em>.<em>코딩공장</em>공장장 정준희<em>갭</em>.<em>코딩공장</em>공장장 정준희<em>개바</em>.<em>코딩공장</em>공장장 정준희<em>개발</em>.<em>코딩공장</em>공장장 정준희<em>개발ㄴ</em>.<em>코딩공장</em>공장장 정준희<em>개발노</em>.<em>코딩공장</em>공장장 정준희<em>개발놑</em>.<em>코딩공장</em>공장장 정준희<em>개발노트</em>'
  let mainContent = textContent.split('.')
  let contentCount = 0

  let startInterval = setInterval(function() {
    MT.innerHTML = mainContent[contentCount]
    contentCount++
    if (contentCount == mainContent.length) {
      clearInterval(startInterval)
    }
  }, 200)
});
</script>

<style>
</style>

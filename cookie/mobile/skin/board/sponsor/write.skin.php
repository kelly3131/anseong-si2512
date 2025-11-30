<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="' . $board_skin_url . '/style.css">', 0);
?>

<?php // 게시판 관리의 상단 내용
if ($board['bo_content_head'] || $board['bo_mobile_content_head']) {
  echo '<div class="bo_top_img">';
  // 반응형: PC와 모바일 모두 지원
  if (G5_IS_MOBILE && $board['bo_mobile_content_head']) {
    echo html_purifier(stripslashes($board['bo_mobile_content_head']));
  } else if ($board['bo_content_head']) {
    echo html_purifier(stripslashes($board['bo_content_head']));
  }
  echo '</div>';
}
?>

<nav id="nav">
  <div class="nav_wr">
    <a href="<?php echo G5_URL ?>"><i class="fa fa-home"></i> HOME</a> &gt; 
    <?php echo $board['bo_subject']; ?>
  </div>
</nav>

<div class="inner container">
  <article id="bo_w" class="bo_w_<?php echo $bo_table; ?>">
  <header>
    <h1><?php echo $board['bo_subject']; ?></h1>
  </header>

  <div id="bo_w_con">
    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);"
      method="post" enctype="multipart/form-data" autocomplete="off">
      <input type="hidden" name="w" value="<?php echo $w ?>">
      <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
      <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
      <input type="hidden" name="sca" value="<?php echo $sca ?>">
      <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
      <input type="hidden" name="stx" value="<?php echo $stx ?>">
      <input type="hidden" name="spt" value="<?php echo $spt ?>">
      <input type="hidden" name="sst" value="<?php echo $sst ?>">
      <input type="hidden" name="sod" value="<?php echo $sod ?>">
      <input type="hidden" name="page" value="<?php echo $page ?>">
    <?php
    $option = '';
    $option_hidden = '';
    if ($is_notice || $is_html || $is_secret || $is_mail) {
      $option = '';
      if ($is_notice) {
        $option .= PHP_EOL . '<input type="radio" id="notice" name="notice" value="1" ' . $notice_checked . '>' . PHP_EOL . '<label for="notice">공지</label>';
      }

      if ($is_html) {
        if ($is_dhtml_editor) {
          $option_hidden .= '<input type="hidden" value="html1" name="html">';
        } else {
          $option .= PHP_EOL . '<input type="radio" id="html" name="html" onclick="html_auto_br(this);" value="' . $html_value . '" ' . $html_checked . '>' . PHP_EOL . '<label for="html">html</label>';
        }
      }

      if ($is_secret) {
        if ($is_admin || $is_secret == 1) {
          $option .= PHP_EOL . '<input type="radio" id="secret" name="secret" value="secret" ' . $secret_checked . '>' . PHP_EOL . '<label for="secret">비밀글</label>';
        } else {
          $option_hidden .= '<input type="hidden" name="secret" value="secret">';
        }
      }

      if ($is_mail) {
        $option .= PHP_EOL . '<input type="radio" id="mail" name="mail" value="mail" ' . $recv_email_checked . '>' . PHP_EOL . '<label for="mail">답변메일받기</label>';
      }
    }

    echo $option_hidden;
    ?>
    <h2 class="sound_only"><?php echo $g5['title'] ?></h2>

    <?php if ($is_category) { ?>
      <div class="bo_w_select write_div">
        <label for="ca_name" class="sound_only">분류<strong>필수</strong></label>
        <select id="ca_name" name="ca_name" required>
          <option value="">선택하세요</option>
          <?php echo $category_option ?>
        </select>
      </div>
    <?php } ?>
    <h3 class="content-title ">후원자 신청등록</h3>
      <div class="step-body clearfix">
        <?php // if ($is_name) { 
        ?>
        <div class="row">
          <div class="col w25"><span>성명(단체명)</span></div>
          <div class="col w75">
            <label for="wr_name" class="sound_only">성명(단체명)<strong>필수</strong></label>
            <input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required
              class="frm_input full_input required" maxlength="20" placeholder="성명(단체명)">
          </div>
        </div>
        <?php //} 
        ?>

        <div class="row">
          <div class="col w25"><span>생년월일(사업자번호)</span></div>
          <div class="col w75">
            <label for="wr_1" class="sound_only">생년월일(사업자번호)<strong>필수</strong></label>
            <input type="text" name="wr_1" id="wr_1"
              class="frm_input full_input required" maxlength="14" placeholder="생년월일(사업자번호)">
          </div>
        </div>

        <?php if ($is_email) { ?>
          <div class="row">
            <div class="col w25"><span>이메일</span></div>
            <div class="col w75">
              <label for="wr_email" class="sound_only">이메일</label>
              <input type="email" name="wr_email" value="<?php echo $email ?>" id="wr_email"
                class="frm_input full_input  email" maxlength="100" placeholder="이메일">
            </div>
          </div>
        <?php } ?>

        <div class="row">
          <div class="col w25"><span>주소</span></div>
          <div class="col w75">
            <input name="member_post" id="member_post" class="frm_input full_input" style="width: auto;min-width: 50px;line-height: 1;" type="text" placeholder="우편번호" readonly onclick="findAddr()">
            <input name="member_addr" id="member_addr" class="frm_input full_input" type="text" placeholder="주소" readonly onclick="findAddr()"> <br>
            <input name="member_detail" id="member_detail" class="frm_input full_input" type="text" placeholder="나머지주소">
            <input name="member_etc" id="member_etc" class="frm_input full_input" type="text" placeholder="참고항목">
            <script>
              function findAddr() {
                new daum.Postcode({
                  oncomplete: function(data) {

                    console.log(data);

                    // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
                    // 도로명 주소의 노출 규칙에 따라 주소를 표시한다.
                    // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                    var roadAddr = data.roadAddress; // 도로명 주소 변수
                    var jibunAddr = data.jibunAddress; // 지번 주소 변수
                    // 우편번호와 주소 정보를 해당 필드에 넣는다.
                    document.getElementById('member_post').value = data.zonecode;
                    if (roadAddr !== '') {
                      document.getElementById("member_addr").value = roadAddr;
                    } else if (jibunAddr !== '') {
                      document.getElementById("member_addr").value = jibunAddr;
                    }
                  }
                }).open();
              }
            </script>
            <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>

            <label for="place" class="sound_only">주소</label>
            <input type="hidden" name="place" value="<?php echo $place ?>" id="place" class="frm_input full_input"
              maxlength="255" placeholder="주소">

          </div>
        </div>
        <div class="row">
          <div class="col w25"><span>자택전화</span></div>
          <div class="col w75">
            <label for="wr_link1" class="sound_only">자택전화</label>
            <select class="col w25" name="tel_1" id="tel_1" required style="width: 80px;">
              <option value="02" selected="selected">02</option>
              <option value="031">031</option>
              <option value="032">032</option>
              <option value="033">033</option>
              <option value="041">041</option>
              <option value="042">042</option>
              <option value="043">043</option>
              <option value="044">044</option>
              <option value="051">051</option>
              <option value="052">052</option>
              <option value="053">053</option>
              <option value="054">054</option>
              <option value="055">055</option>
              <option value="061">061</option>
              <option value="062">062</option>
              <option value="063">063</option>
              <option value="064">064</option>
              <option value="050">050</option>
              <option value="070">070</option>
            </select>-
            <input type="text" name="tel_2" id="tel_2" class="frm_input" maxlength="4" style="width: 80px;">-
            <input type="text" name="tel_3" id="tel_3" class="frm_input" maxlength="4" style="width: 80px;">
            <input type="hidden" name="wr_link1" id="wr_link1" class="frm_input full_input" maxlength="14" placeholder="전화번호">
          </div>
        </div>
        <div class="row">
          <div class="col w25"><span>휴대폰</span></div>
          <div class="col w75">
            <label for="wr_link2" class="sound_only">휴대폰</label>
            <select class="col w25" name="hp_1" id="hp_1" required style="width: 80px;">
              <option value="010" selected="selected">010</option>
              <option value="016">016</option>
              <option value="017">017</option>
              <option value="018">018</option>
              <option value="019">019</option>
            </select>-
            <input type="text" name="hp_2" id="hp_2" class="frm_input required" maxlength="4" style="width: 80px;" placeholder="휴대폰">-
            <input type="text" name="hp_3" id="hp_3" class="frm_input required" maxlength="4" style="width: 80px;" placeholder="휴대폰">
            <input type="hidden" name="wr_link2" id="wr_link2" class="frm_input full_input" maxlength="14" placeholder="휴대폰">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col w25"><span>직업</span></div>
        <div class="col w75">
          <label for="wr_2" class="sound_only">직업</label>
          <input type="text" name="wr_2" value="<?php echo $wr_2 ?>" id="wr_2"
            class="frm_input full_input" maxlength="100" placeholder="직업">
        </div>
      </div>
      <!-- 후원 방법 신청 -->
      <div class="row">
        <div class="col w25"><span>후원형태</span></div>
        <div class="col w75"><label>
            <label><input type="radio" name="wr_3" value="정기후원" id="wr_31"
                class="frm_input">정기후원</label>
            <label><input type="radio" name="wr_3" value="일시후원" id="wr_32"
                class="frm_input">일시후원</label>
        </div>
      </div>
      <!-- 희망기간 -->
      <div class="row">
        <div class="col w25"><span>희망기간</span></div>
        <div class="col w75"><label><input type="radio" name="wr_4" value="월" id="wr_40"
              class="frm_input" checked>월</label>
          <label><input type="radio" name="wr_4" value="격월" id="wr_41"
              class="frm_input">격월</label>
          <label><input type="radio" name="wr_4" value="분기" id="wr_42"
              class="frm_input">분기</label>
          <label><input type="radio" name="wr_4" value="반기" id="wr_43"
              class="frm_input">반기</label>
          <label><input type="radio" name="wr_4" value="년" id="wr_44"
              class="frm_input">년</label>
          <label><input type="radio" name="wr_4" value="기타" id="wr_45"
              class="frm_input">기타</label>

        </div>
      </div>
      <!-- 후원분류 -->
      <div class="row">
        <div class="col w25"><span>후원분류</span></div>
        <div class="col w75">
          <label><input type="radio" name="wr_5" value="일반후원" id="wr_50"
              class="frm_input" checked>일반후원</label>
          <label><input type="radio" name="wr_5" value="결연후원" id="wr_51"
              class="frm_input">결원후원</label>
          <label><input type="radio" name="wr_5" value="밑반찬후원" id="wr_52"
              class="frm_input">밑반찬후원</label>
          <label><input type="radio" name="wr_5" value="밑반찬후원" id="wr_53"
              class="frm_input">물품후원</label>
        </div>
      </div>
      <!-- 후원금액 -->       
      <div class="row" style="padding: 10px 0;">
        <div class="col w25"><span>후원금액</span></div>
        <div class="col w75">
          <div class="row" style="padding-bottom: 10px;">
            <input class="img" type="radio" name="wr_6" id="wr_60" value="30,000원" checked>
            <label for="wr_60">30,000원</label>
            <input class="img" type="radio" name="wr_6" id="wr_61" value="20,000원">
            <label for="wr_61">20,000원</label>
            <input class="img" type="radio" name="wr_6" id="wr_62" value="10,000원">
            <label for="wr_62">10,000원</label>
            <input class="img" type="radio" name="wr_6" id="wr_63" value="기타">
            <label for="wr_63">기타</label>
            <input type="text" id="wr_7" name="wr_7" placeholder="기타금액" style="width: 100px;">원
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col w25"><span>납부방법</span></div>
        <div class="col w75"><label>
            <input type="radio" name="wr_8" value="자동이체" id="wr_80"
              class="frm_input" checked>자동이체</label>
          <label><input type="radio" name="wr_8" value="방문납입" id="wr_81"
              class="frm_input">방문납입</label>
          <label><input type="radio" name="wr_8" value="지로" id="wr_82"
              class="frm_input">지로</label>
        </div>
      </div>
      <div class="check-spon">
        <div class="row">
          <div class="col w25"><span>납부은행</span></div>
          <div class="col w75">
            <input type="text" id="wr_9" name="wr_9" placeholder="은행명" value="">
          </div>
        </div>
        <div class="row">
          <div class="col w25"><span>계좌번호</span></div>
          <div class="col w75"><input type="text" id="wr_10" name="wr_10" placeholder="계좌번호" value="">
          </div>
        </div>
      </div>

      <div class="bo_w_tit write_div" style="display:none">
        <label for="wr_subject" class="sound_only">제목<strong>필수</strong></label>
        <input type="text" name="wr_subject" value="후원신청" id="wr_subject" required class="frm_input full_input required"
          placeholder="제목">
      </div>
      <div class="write_div">
        <label for="wr_content" class="sound_only">내용<strong>필수</strong></label>
        <?php if ($write_min || $write_max) { ?>
          <!-- 최소/최대 글자 수 사용 시 -->
          <p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대
            <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.
          </p>
        <?php } ?>
        <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 
        ?>
        <?php if ($write_min || $write_max) { ?>
          <!-- 최소/최대 글자 수 사용 시 -->
          <div id="char_count_wrap"><span id="char_count"></span>글자</div>
        <?php } ?>
      </div>
      <div class="step-body clearfix">
        <div class="panel-head">
           연말 소득공제영수증 발급을 위해 개인정보 수집 및 이용약관을 읽고 동의해주세요.
        </div>
        <div class="panel-body">
          <input type="checkbox" name="agrees" id="agrees" value="1"> 개인정보 수집 및 이용동의서의 내용을 숙지하고 동의합니다. <button type="button" class="btn btn-primary btn-xs" onclick="view_consent();return false;">자세히보기</button>
          <div id="provision" style="display: none;">
            <div id="provision2">
              <h2>개인정보 수집 및 이용약관</h2>

              <p>안성시노인복지관은 (이하 '복지관'은) 고객님의 개인정보를 중요시하며, "정보통신망 이용촉진 및 정보보호"에 관한 법률을 준수하고 있습니다. <br>
                회사는 개인정보취급방침을 통하여 고객님께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며, 개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다.
                회사는 개인정보취급방침을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지할 것입니다. <br>
                본 방침은 : 2014 년 8 월 7일 부터 시행됩니다. </p>

              <h3>■ 수집하는 개인정보 항목</h3>
              회사는 회원가입, 상담, 서비스 신청 등등을 위해 아래와 같은 개인정보를 수집하고 있습니다. <br>
              수집항목 : 이름 , 생년월일 , 성별 , 로그인ID , 비밀번호 , 비밀번호 질문과 답변, 자택 전화번호 , 자택 주소 , 휴대전화번호 , 이메일 , 주민등록번호 , 쿠키 , 결제기록 개인정보 수집방법 : 홈페이지(회원가입) <br>
              단, 예외적으로 자원봉사 및 후원신청, 실습신청 시 아래와 같은 개인정보를 추가 수집하고 있습니다.<br>
              <b>1) 수집방법</b> : 홈페이지(자원봉사 신청)<br>
              수집항목 : 생년월일, 우편번호, 자택주소, 전화번호, 휴대폰, 최종학력, 직업, 참여동기, 활동경험, 희망분야, 활동시간, 자기소개, 파일첨부<br>
              <b>2) 수집방법</b> : 홈페이지(후원 신청)<br>
              수집항목 : 주민번호, 우편번호, 자택주소, 자택전화, 휴대폰, 직업, 후원형태, 희망기간, 후원분류, 후원금액, 납부방법, (자동이체선택시) 은행명, 계좌번호, 건의사항, 파일첨부<br>
              <b>3) 수집방법</b> : 홈페이지(실습 신청)<br>
              수집항목 : 생년월일, 우편번호, 자택주소, 자택전화, 휴대폰, 종교, 학교명, 학년, 학과, 실습신청기간, 건의사항, 파일첨부

              <h3>■ 개인정보의 수집 및 이용목적</h3>
              회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다. <br>
              회원제 서비스 이용에 따른 본인확인 , 개인 식별 , 불량회원의 부정 이용 방지와 비인가 사용 방지 , 가입 의사 확인 , 연령확인 , 불만처리 등 민원처리 , 고지사항 전달, 접속 빈도 파악 또는 회원의 서비스 이용에 대한 통계

              <h3>■ 개인정보의 보유 및 이용기간</h3>
              원칙적으로, 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다. <br>
              단, 관계법령의 규정에 의하여 보존할 필요가 있는 경우 회사는 아래와 같이 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다. <br>
              <b>보존 항목</b> : 결제기록 보존 근거 : 계약 또는 청약철회 등에 관한 기록 보존 기간 : 3년 계약 또는 청약철회 등에 관한 기록 : 5년 (전자상거래등에서의 소비자보호에 관한 법률) 대금결제 및 재화 등의 공급에 관한 기록 : 5년 (전자상거래등에서의 소비자보호에 관한 법률) 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년 (전자상거래등에서의 소비자보호에 관한 법률)

              <h3>■ 개인정보의 파기절차 및 방법</h3>
              회사는 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체없이 파기합니다. <br>
              파기절차 및 방법은 다음과 같습니다. <br>
              <b>파기절차</b> <br>
              회원님이 회원가입 등을 위해 입력하신 정보는 목적이 달성된 후 별도의 DB로 옮겨져 (종이의 경우 별도의 서류함) 내부 방침 및 기타 관련 법령에 의한 정보보호 사유에 따라 (보유 및 이용기간 참조) 일정 기간 저장된 후 파기되어집니다. <br>
              별도 DB로 옮겨진 개인정보는 법률에 의한 경우가 아니고서는 보유되어지는 이외의 다른 목적으로 이용되지 않습니다. 파기방법 전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다.

              <h3>■ 개인정보 제공</h3>
              회사는 이용자의 개인정보를 원칙적으로 외부에 제공하지 않습니다. 다만, 아래의 경우에는 예외로 합니다.
              이용자들이 사전에 동의한 경우 법령의 규정에 의거하거나, 수사 목적으로 법령에 정해진
              절차와 방법에 따라 수사기관의 요구가 있는 경우

              <h3>■ 수집한 개인정보의 위탁</h3>
              회사는 서비스 이행을 위해 아래와 같이 외부 전문업체에 위탁하여 운영하고 있습니다.
              위탁 대상자 : (주)○○○ 위탁업무 내용 : 웹사이트 및 시스템 관리

              <h3>■ 이용자 및 법정대리인의 권리와 그 행사방법</h3>
              이용자는 언제든지 등록되어 있는 자신의 개인정보를 조회하거나 수정할 수 있으며 가입해지를 요청할 수도 있습니다. 이용자들의 개인정보 조회,수정을 위해서는 '개인정보변경' (또는 '회원정보수정' 등)을 가입해지(동의철회)를 위해서는 "회원탈퇴"를 클릭하여 본인 확인 절차를 거치신 후 직접 열람, 정정 또는 탈퇴가 가능합니다. 혹은 개인정보관리책임자에게 서면, 전화 또는 이메일로 연락하시면 지체없이 조치하겠습니다. 귀하가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까지 당해 개인정보를 이용 또는 제공하지 않습니다. <br>
              또한 잘못된 개인정보를 제3자에게 이미 제공한 경우에는 정정 처리결과를 제3자에게 지체없이 통지하여 정정이 이루어지도록 하겠습니다. 회사는 이용자의 요청에 의해 해지 또는 삭제된 개인정보는 "회사가 수집하는 개인정보의 보유 및 이용기간"에 명시된 바에 따라 처리하고 그 외의 용도로 열람 또는 이용할 수 없도록 처리하고 있습니다.

              <h3>■ 개인정보 자동수집 장치의 설치, 운영 및 그 거부에 관한 사항</h3>
              회사는 귀하의 정보를 수시로 저장하고 찾아내는 '쿠키(cookie)' 등을 운용합니다. <br>
              쿠키란 웹사이트를 운영하는데 이용되는 서버가 귀하의 브라우저에 보내는 아주 작은 텍스트 파일로서 귀하의 컴퓨터 하드디스크에 저장됩니다.<br>
              회사은(는) 다음과 같은 목적을 위해 쿠키를 사용합니다.
              <b>쿠키 등 사용 목적</b>
              회원과 비회원의 접속 빈도나 방문 시간 등을 분석, 이용자의 취향과 관심분야를 파악 및 자취 추적, 각종 이벤트 참여 정도 및 방문 회수 파악 등을 통한 타겟 마케팅 및 개인 맞춤 서비스 제공 귀하는 쿠키 설치에 대한 선택권을 가지고 있습니다. 따라서, 귀하는 웹브라우저에서 옵션을 설정함으로써 모든 쿠키를 허용하거나, 쿠키가 저장될 때마다 확인을 거치거나, 아니면 모든 쿠키의 저장을 거부할 수도 있습니다. 쿠키 설정 거부 방법 쿠키 설정을 거부하는 방법으로는 회원님이 사용하시는 웹 브라우저의 옵션을 선택함으로써 모든 쿠키를 허용하거나 쿠키를 저장할 때마다 확인을 거치거나, 모든 쿠키의 저장을 거부할 수 있습니다. <br>
              <b>설정방법</b> 예(인터넷 익스플로어의 경우) : 웹 브라우저 상단의 도구 &gt; 인터넷 옵션 &gt; 개인정보 단, 귀하께서 쿠키 설치를 거부하였을 경우 서비스 제공에 어려움이 있을 수 있습니다.

              <h3>■ 개인정보에 관한 민원서비스</h3>
              회사는 고객의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 아래와 같이 관련 부서 및 개인정보관리책임자를 지정하고 있습니다. <br>
              고객서비스담당 부서 : 안성시노인복지관<br>전화번호 : 031) 674-0794~6<br>
              개인정보관리책임자 성명 : 김사랑<br>전화번호 : 031) 674-0794~6 <br><br>
              귀하께서는 회사의 서비스를 이용하시며 발생하는 모든 개인정보보호 관련 민원을 개인정보관리책임자 혹은 담당부서로 신고하실 수 있습니다. 회사는 이용자들의 신고사항에 대해 신속하게 충분한 답변을 드릴 것입니다. 기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 아래 기관에 문의하시기 바랍니다.
              <br>
              개인분쟁조정위원회 (www.1336.or.kr/1336) <br>
              정보보호마크인증위원회 (www.eprivacy.or.kr/02-580-0533~4) <br>
              대검찰청 인터넷범죄수사센터 (http://icic.sppo.go.kr/02-3480-3600) <br>
              경찰청 사이버테러대응센터 (www.ctrc.go.kr/02-392-0330) <br>
              <br>
              <br>
              공고일자 : 2014년 6월 30일<br>
              시행일자 : 2014년 6월 30일<br>

            </div>
          </div>
        </div>

      </div>

      <!-- 자동등록방지 -->
      <div class="b-row submit-body">

        <?php //if ($is_use_captcha) { //자동등록방지 
        ?>
        <div class="write_div">
          <span class="sound_only">자동등록방지</span>
          <?php echo $captcha_html ?>

        </div>
        <?php //} 
        ?>

      </div>

      <!-- 후원 신청 버튼 보이기 가리기 -->
      <div class="write_div">
        <? if ($is_admin) { ?>
          <a href="<?php echo get_pretty_url($bo_table); ?>" class="btn_b01 btn">후원신청목록</a>
        <? } ?>
        <a href="/bbs/write.php?bo_table=support" class="btn_b01 btn">&nbsp;취&nbsp;&nbsp;&nbsp;소&nbsp;</a>
        <input type="submit" value="후원신청완료" id="btn_submit" class="btn_submit btn" accesskey="s">
      </div>
      </div>
    </form>
  </div>
</article>



<script>
  function view_consent() {
    const provision = document.getElementById("provision");
    // 현재 display 값 확인 후 전환
    if (provision.style.display === "none" || provision.style.display === "") {
      provision.style.display = "block"; // 보이기
    } else {
      provision.style.display = "none";  // 숨기기
    }
  }

  function toggleCheckSpon() {
    const selected = document.querySelector('input[name="wr_8"]:checked');
    const checkSpon = document.querySelector('.check-spon');

    if (selected && selected.value === "자동이체") {
      checkSpon.style.display = "block"; // 보이기
    } else {
      checkSpon.style.display = "none"; // 숨기기
    }
  }

  // 라디오 버튼 변경 시 이벤트
  document.querySelectorAll('input[name="wr_8"]').forEach(radio => {
    radio.addEventListener('change', toggleCheckSpon);
  });

  // 초기 로딩 시 체크 상태 반영
  toggleCheckSpon();

  const etc = document.querySelectorAll('input[name="wr_6"]');
  const wr7 = document.getElementById('wr_7');

  function toggleInput() {
    if (document.getElementById('wr_63').checked) {
      wr7.disabled = false; // 입력 가능
      wr7.focus();
    } else {
      wr7.value = ""; // 값 초기화
      wr7.disabled = true; // 비활성화
    }
  }

  etc.forEach(etc => {
    etc.addEventListener('change', toggleInput);
  });

  // 페이지 로드 시 현재 선택된 값 반영
  toggleInput();

  $("#wr_5").on("keyup", function() {
    $(this).val($(this).val().replace(/[^0-9]/g, "").replace(/\,/g, '').replace(/(\d)(?=(?:\d{3})+(?!\d))/g, '$1,'));
  });

  function supportList() {
    location.replace("/bbs/board.php?bo_table=support");
  }
</script>

<script>
  <?php
  if ($write_min || $write_max) {
  ?>
    // 글자수 제한
    var char_min = parseInt( <?php echo $write_min; ?> ); // 최소
    var char_max = parseInt( <?php echo $write_max; ?> ); // 최대
    check_byte("wr_content", "char_count");

    $(function() {
      $("#wr_content").on("keyup", function() {
        check_byte("wr_content", "char_count");
      });
    });

  <?php
  } ?>

  function html_auto_br(obj) {
    if (obj.checked) {
      result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
      if (result)
        obj.value = "html2";
      else
        obj.value = "html1";
    } else
      obj.value = "";
  }

  function fwrite_submit(f) {

    if (f.wr_1.value.length < 14) {
      alert("생년월일(사업자번호)를 입력해주세요");
      return false;
    }

    f.place.value = $("#member_post").val() + "|" + $("#member_addr").val() + "|" + $("#member_detail").val() + $("#member_etc").val();
    f.wr_link1.value = $("#tel_1").val() + "-" + $("#tel_2").val() + "-" + $("#tel_3").val();
    f.wr_link2.value = $("#hp_1").val() + "-" + $("#hp_2").val() + "-" + $("#hp_3").val();

    if(f.wr_link2.value === "---") {
      alert("휴대폰 번호를 입력해 주세요.");
      return fasle;
    }

    if(!document.querySelector('input[name="wr_3"]:checked')) {
      alert("후원형태를 선태해 주세요.");
      return fasle;
    }

    if(!document.querySelector('input[name="wr_4"]:checked')) {
      alert("희망기간를 선태해 주세요.");
      return fasle;
    }

    if(!document.querySelector('input[name="wr_5"]:checked')) {
      alert("후원분류를 선태해 주세요.");
      return fasle;
    }

    if(!document.querySelector('input[name="wr_6"]:checked')) {
      alert("후원금액을 선태해 주세요.");
      return fasle;
    }

    const wr7 = document.getElementById('wr_7');
    if (document.getElementById('wr_63').checked) {
      if(wr7.value == '') {
        alert("후원금액을 입력해 주세요.");
        return fasle;
      }
    }

    if (document.getElementById('wr_80').checked) {
      if(document.getElementById('wr_9').value == ''||document.getElementById('wr_10').value == '') {
        alert("납부계좌정보를 입력해주세요.");
        return fasle;
      }
    }

    if (!document.getElementById("agrees").checked) {
      alert("개인정보 수집 및 이용약관에 동의를 해주세요.");
      return fasle;
    }

    <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   
    ?>

    var subject = ""; 
    var content = "";
    
    f.wr_subject.value = f.wr_name.vaule + '님이 후원신청하였습니다.';
    if(f.wr_content.value == "") {
      f.wr_content.value = "내용없음";
    }
    $.ajax({
      url: g5_bbs_url + "/ajax.filter.php",
      type: "POST",
      data: {
        "subject": f.wr_subject.value,
        "content": f.wr_content.value
      },
      dataType: "json",
      async: false,
      cache: false,
      success: function(data, textStatus) {
        subject = data.subject;
        content = data.content;
      }
    });

    if (subject) {
      alert("제목에 금지단어('" + subject + "')가 포함되어있습니다");
      f.wr_subject.focus();
      return false;
    }

    if (content) {
      alert("내용에 금지단어('" + content + "')가 포함되어있습니다");
      if (typeof(ed_wr_content) != "undefined")
        ed_wr_content.returnFalse();
      else
        f.wr_content.focus();
      return false;
    }

    if (document.getElementById("char_count")) {
      if (char_min > 0 || char_max > 0) {
        var cnt = parseInt(check_byte("wr_content", "char_count"));
        if (char_min > 0 && char_min > cnt) {
          alert("내용은 " + char_min + "글자 이상 쓰셔야 합니다.");
          return false;
        } else if (char_max > 0 && char_max < cnt) {
          alert("내용은 " + char_max + "글자 이하로 쓰셔야 합니다.");
          return false;
        }
      }
    }

    <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  
    ?>

    document.getElementById("btn_submit").disabled = "disabled";

    return true;
  }
</script>
</div>
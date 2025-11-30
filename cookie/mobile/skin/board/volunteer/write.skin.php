<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="' . $board_skin_url . '/style.css">', 0);
?>

<?php // 게시판 관리의 상단 내용
if (G5_IS_MOBILE) {
  echo '<div class="bo_top_img">';
  // 모바일의 경우 설정을 따르지 않는다.
  echo html_purifier(stripslashes($board['bo_mobile_content_head']));
  echo '</div>';
}
?>

<div id="nav">
  <div class="nav_wr"><a href="<?php echo G5_URL ?>"><i class="fa fa-home"></i> HOME</a> &gt; <?php echo ($board['bo_mobile_subject'] ? $board['bo_mobile_subject'] : $board['bo_subject']); ?> </div>
</div>

<section id="bo_w" class="new-main-container">
  <div class="new-form-container">
    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">
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

      <div class="new-grid new-grid-1">
        <div class="new-field-group">
          <label for="wr_name" class="new-field-label required">성명</label>
          <input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="new-field-input" maxlength="20" placeholder="성명을 입력해주세요">
        </div>
        
        <div class="new-field-group">
          <label for="wr_1" class="new-field-label required">생년월일(사업자번호)</label>
          <input type="text" name="wr_1" value="<?php echo $wr_1 ?>" id="wr_1" required class="new-field-input" minlength="6" maxlength="12" placeholder="생년월일 또는 사업자번호를 입력해주세요">
        </div>
        <?php if ($is_email) { ?>
        <div class="new-field-group">
          <label for="wr_email" class="new-field-label">이메일</label>
          <input type="email" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="new-field-input" maxlength="100" placeholder="이메일 주소를 입력해주세요">
        </div>
        <?php } ?>
        
        <div class="new-field-group">
          <label class="new-field-label required">주소</label>
          <div style="display: flex; gap: 10px; margin-bottom: 10px;">
            <input name="member_post" id="member_post" class="new-field-input" style="width: 120px;" type="text" placeholder="우편번호" readonly onclick="findAddr()">
            <button type="button" onclick="findAddr()" class="new-btn new-btn-outline" style="padding: 10px 20px; font-size: 14px;">주소찾기</button>
          </div>
          <input name="member_addr" id="member_addr" class="new-field-input" type="text" placeholder="기본 주소" readonly onclick="findAddr()" style="margin-bottom: 10px;">
          <input name="member_detail" id="member_detail" class="new-field-input" type="text" placeholder="상세 주소" style="margin-bottom: 10px;">
          <input name="member_etc" id="member_etc" class="new-field-input" type="text" placeholder="참고항목 (선택사항)">
          
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
                  // 상세주소 입력 칸에 포커스
                  document.getElementById('member_detail').focus();
                }
              }).open();
            }
          </script>
          <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
          
          <input type="hidden" name="place" value="<?php echo $place ?>" id="place" maxlength="255">
        </div>
        
        <div class="new-field-group">
          <label class="new-field-label required">자택전화</label>
          <div style="display: flex; gap: 5px; align-items: center;">
            <select name="tel_1" id="tel_1" required class="new-field-input" style="width: 100px;">
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
            </select>
            <span>-</span>
            <input type="text" name="tel_2" id="tel_2" class="new-field-input" maxlength="4" style="width: 100px;" placeholder="0000">
            <span>-</span>
            <input type="text" name="tel_3" id="tel_3" class="new-field-input" maxlength="4" style="width: 100px;" placeholder="0000">
            <input type="hidden" name="wr_link1" id="wr_link1" maxlength="14">
          </div>
        </div>
        
        <?php if ($is_password) { ?>
        <div class="new-field-group">
          <label for="wr_password" class="new-field-label required">비밀번호</label>
          <input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="new-field-input" maxlength="20" placeholder="비밀번호를 입력해주세요">
        </div>
        <?php } ?>
        
        <div class="new-field-group">
          <label class="new-field-label required">휴대폰</label>
          <div style="display: flex; gap: 5px; align-items: center;">
            <select name="hp_1" id="hp_1" required class="new-field-input" style="width: 100px;">
              <option value="010" selected="selected">010</option>
              <option value="016">016</option>
              <option value="017">017</option>
              <option value="018">018</option>
              <option value="019">019</option>
            </select>
            <span>-</span>
            <input type="text" name="hp_2" id="hp_2" class="new-field-input" required maxlength="4" style="width: 100px;" placeholder="0000">
            <span>-</span>
            <input type="text" name="hp_3" id="hp_3" class="new-field-input" required maxlength="4" style="width: 100px;" placeholder="0000">
            <input type="hidden" name="wr_link2" id="wr_link2" maxlength="14">
          </div>
        </div>
        
        <div class="new-field-group">
          <label for="wr_2" class="new-field-label">최종학력</label>
          <input type="text" name="wr_2" value="<?php echo $wr_2 ?>" id="wr_2" class="new-field-input" maxlength="50" placeholder="최종학력을 입력해주세요 (선택사항)">
        </div>

        <div class="new-field-group">
          <label for="wr_3" class="new-field-label">직업</label>
          <input type="text" name="wr_3" value="<?php echo $wr_3 ?>" id="wr_3" class="new-field-input" maxlength="100" placeholder="현재 직업을 입력해주세요">
        </div>

        <div class="new-field-group">
          <label class="new-field-label required">참여동기</label>
          <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; margin-top: 10px;">
            <label style="display: flex; align-items: center; gap: 8px;">
              <input type="radio" name="wr_4" id="wr_40" value="0" checked style="margin: 0;">
              <span>이웃에 봉사</span>
            </label>
            <label style="display: flex; align-items: center; gap: 8px;">
              <input type="radio" name="wr_4" id="wr_41" value="1" style="margin: 0;">
              <span>보람된 여가선용</span>
            </label>
            <label style="display: flex; align-items: center; gap: 8px;">
              <input type="radio" name="wr_4" id="wr_42" value="2" style="margin: 0;">
              <span>자기발전</span>
            </label>
            <label style="display: flex; align-items: center; gap: 8px;">
              <input type="radio" name="wr_4" id="wr_43" value="3" style="margin: 0;">
              <span>사회적 경험</span>
            </label>
            <label style="display: flex; align-items: center; gap: 8px;">
              <input type="radio" name="wr_4" id="wr_44" value="4" style="margin: 0;">
              <span>종교적 신념</span>
            </label>
            <label style="display: flex; align-items: center; gap: 8px;">
              <input type="radio" name="wr_4" id="wr_45" value="5" style="margin: 0;">
              <span>지역사회 발전</span>
            </label>
            <label style="display: flex; align-items: center; gap: 8px;">
              <input type="radio" name="wr_4" id="wr_46" value="6" style="margin: 0;">
              <span>기타</span>
            </label>
          </div>
        </div>
        
        <div class="new-field-group">
          <label class="new-field-label required">희망분야</label>
          <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; margin-top: 10px;">
            <label style="display: flex; align-items: center; gap: 8px;">
              <input type="checkbox" name="cb_5" id="cb_50" value="경로식당 배식 및 조리" style="margin: 0;">
              <span>경로식당 배식 및 조리</span>
            </label>
            <label style="display: flex; align-items: center; gap: 8px;">
              <input type="checkbox" name="cb_5" id="cb_51" value="이·미용" style="margin: 0;">
              <span>이·미용</span>
            </label>
            <label style="display: flex; align-items: center; gap: 8px;">
              <input type="checkbox" name="cb_5" id="cb_52" value="밑반찬배달" style="margin: 0;">
              <span>밑반찬배달</span>
            </label>
            <label style="display: flex; align-items: center; gap: 8px;">
              <input type="checkbox" name="cb_5" id="cb_53" value="프로그램지원" style="margin: 0;">
              <span>프로그램지원</span>
            </label>
            <label style="display: flex; align-items: center; gap: 8px;">
              <input type="checkbox" name="cb_5" id="cb_54" value="업무보조" style="margin: 0;">
              <span>업무보조</span>
            </label>
            <label style="display: flex; align-items: center; gap: 8px;">
              <input type="checkbox" name="cb_5" id="cb_55" value="재능나눔" style="margin: 0;">
              <span>재능나눔</span>
            </label>
            <label style="display: flex; align-items: center; gap: 8px;">
              <input type="checkbox" name="cb_5" id="cb_56" value="기타" style="margin: 0;">
              <span>기타</span>
            </label>
          </div>
          <div style="margin-top: 10px; display: flex; align-items: center; gap: 10px;">
            <span>기타 분야:</span>
            <input type="text" id="wr_6" name="wr_6" placeholder="기타분야를 입력해주세요" class="new-field-input" style="flex: 1;">
          </div>
          <input type="hidden" id="wr_5" name="wr_5">
        </div>

            <div class="row">
              <div class="col w25"><span>활동시간</span></div>
              <div class="col w75">
                <label for="wr_9" class="sound_only">활동시간<strong>필수</strong></label>
                <select class="col w25" name="wr_7" id="wr_7" required style="width: 80px;">
                  <option value="주선택" selected="selected">주선택</option>
                  <option value="매주">매주</option>
                  <option value="첫째주">첫째주</option>
                  <option value="두째주">두째주</option>
                  <option value="셋째주">셋째주</option>
                  <option value="넷째주">넷째주</option>
                </select>
              </div>
              <div class="col w75">
                <label for="wr_9" class="sound_only">활동시간<strong>필수</strong></label>
                <select class="col w25" name="wr_8" id="wr_8" required style="width: 80px;">
                  <option value="요일선택" selected="selected">요일선택</option>
                  <option value="월">월</option>
                  <option value="화">화</option>
                  <option value="수">수</option>
                  <option value="목">목</option>
                  <option value="금">금</option>
                  <option value="목">토</option>
                  <option value="금">일</option>
                </select>
              </div>
              <div class="col w75">
                <label for="wr_9" class="sound_only">봉사시간<strong>필수</strong></label>
                <input type="text" name="wr_9" value="<?php echo $wr_9 ?>" id="wr_9" required class="frm_input full_input required" maxlength="50" placeholder="시간입력">
              </div>
            </div>

            <div class="row">
              <div class="col w25"><span>메모</span></div>
              <div class="col w75">
                <label for="wr_content" class="sound_only">메모</label>
                <?php if ($write_min || $write_max) { ?>
                  <!-- 최소/최대 글자 수 사용 시 -->
                  <!--<p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>-->
                <?php } ?>
                <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 
                ?>
                <?php if ($write_min || $write_max) { ?>
                  <!-- 최소/최대 글자 수 사용 시 -->
                  <div id="char_count_wrap"><span id="char_count"></span>글자</div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div> <!-- 신청서 끝 -->

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
      <div class="form_01 write_div">
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

        <div class="bo_w_tit write_div" style="display:none">
          <label for="wr_subject" class="sound_only">제목<strong>필수</strong></label>
          <input type="text" name="wr_subject" value="자원봉사 신청" id="wr_subject" required class="frm_input full_input required" placeholder="제목">
        </div>

        <?php if ($is_use_captcha) { //자동등록방지 
        ?>
          <div class="write_div">
            <span class="sound_only">자동등록방지</span>
            <?php echo $captcha_html ?>

          </div>
        <?php } ?>
        <!-- 개인정보동의 -->
      </div>

      <div class="write_div">
        <?php if ($is_admin) { ?>
          <a href="<?php echo get_pretty_url($bo_table); ?>" class="btn_b01 btn">자원봉사신청목록</a>
        <?php } ?>
        <?php if (!$is_admin) { ?>
          <a href="/bbs/write.php?bo_table=volunteer" class="btn_b01 btn">&nbsp;취&nbsp;&nbsp;&nbsp;소&nbsp;</a>
          <input type="submit" value="자원봉사신청완료" id="btn_submit" class="btn_submit btn" accesskey="s">
        <?php } ?>
      </div>
    </div>

    </div>
  </form>

</section>

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

  document.addEventListener("DOMContentLoaded", function () {
    const cb56 = document.getElementById("wrcb_56");
    const wr6 = document.getElementById("wr_6");

    wr56.addEventListener("change", function () {
      if (cb56.checked) {
        wr6.disabled = false;
        wr6.focus(); // 선택되면 바로 입력 가능
      } else {
        wr6.value = ""; // 선택 해제 시 초기화
        wr6.disabled = true;
      }
    });
  });
  
  $('.btn-list').on('click', function() {
    location.href = "/bbs/board.php?bo_table=volunteer";
  });

  <?php if ($write_min || $write_max) { ?>
    // 글자수 제한
    var char_min = parseInt(<?php echo $write_min; ?>); // 최소
    var char_max = parseInt(<?php echo $write_max; ?>); // 최대
    check_byte("wr_content", "char_count");

    $(function() {
      $("#wr_content").on("keyup", function() {
        check_byte("wr_content", "char_count");
      });
    });

  <?php } ?>

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

    const cb56 = document.getElementById("cb_56");
    const wr6 = document.getElementById("wr_6");
    
    // 체크된 값들만 배열로 수집
    let selectedValues = Array.from(checkboxes)
      .filter(cb => cb.checked)
      .map(cb => cb.value);

  if (cb56.checked && wr6.value.trim() == "") {
      alert("기타 내용을 입력해 주세요.");
      return false;
    }

    if (selectedValues.length === 0) {
      alert("희망 분야를 하나 이상 선택해주세요.");
      return false;
    }

    // , 로 연결된 문자열 생성
    f.wr_5.value = selectedValues.join(",");
    
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
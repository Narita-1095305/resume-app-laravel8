<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/b4.css">
</head>
<body>
  <main>
    <section class="resume">
      <section class="page left-page">
        <section class="resume-header">
          <h2>履　歴　書</h2>
          <div class="creataion-date">
            <p id="creatation-year"  autofocus></p>
            <p class="label">年</p> 
            <p id="creatation-month"></p>
            <p class="label">月</p> 
            <p id="creatation-day"  ></p>
            <p class="label">日現在</p> 
          </div>
        </section><!-- /.resume-header -->
  
        <section class="id-photo">
          <p>写真を貼る位置</p>
          <p>写真を貼る必要がある場合</p>
          <p>1.縦 36～40mm<br>
            横 24～30mm</p>
          <p>2.本人単身から上</p>
          <label for="id-photo">
            <input type="file" id="id-photo" accept="image/gif,image/jpeg,image/jpg,image/png">
            <img id="photo-image">
          </label>
          <div id="contextmenu">
            <ul>
              <li id="photo-delete">画像を削除</li>
            </ul>
          </div>
        </section><!-- /.id-photo -->
  
        <section class="personal-data">
          <div class="basic-data">
            <div class="name-furigana">
              <p class="label">ふりがな</p> 
              <p id="name-furigana" class=''></p>
            </div> 
            <div class="name">
              <p class="label">氏 名</p> 
              <p id="name"></p>
            </div>
            <div class="gender">
              <p id="gender">男・女</p>
            </div>
            <div class="birthday">
              <p class="label">生年月日</p>
              <p id="birthday-year"></p>
              <p class="label">年</p>
              <p id="birthday-month"></p>
              <p class="label">月</p>
              <p id="birthday-day"></p>
              <p class="label">日生（満</p>
              <p id="old-years"></p>
              <p class="label">歳）</p>
            </div><!-- /.birthday -->
          </div><!-- /.basic-data -->

          <div class="contact-info">
            <div class="resides-furigana">
              <p class="label">ふりがな</p>
              <p id="resides-furigana"></p>
            </div>
            <div class="postal-code">
              <p class="label">現住所</p>
              <p class="label">（〒</p>
              <p id="postal-code-first3"></p>
              <p class="label">ー</p>
              <p id="postal-code-last4"></p>
              <p class="label">）</p>
            </div>
            <div class="resides">
              <p id="resides-address"></p>
            </div>
            <div class="phone-number">
              <p class="label">電話</p>
              <p id="phone-number"  type="number"></p>
            </div>
            <div class="e-mail">
              <p class="label">E-mail</p>
              <p id="e-mail" class="multiple-lines"></p>
            </div>
          </div>
        </section><!-- /#personal-data -->
  
        <section class="education-and-career-history">
          <div class="resume-line resume-line-header">
            <p class="label">年</p>
            <p class="label">月</p>
            <p class="label">学歴・職歴</p>
          </div>
          <div class="resume-line">
            <p id="career-year-1"></p>
            <p id="career-month-1"></p>
            <p id="career-contents-1"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-2"></p>
            <p id="career-month-2"></p>
            <p id="career-contents-2"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-3"></p>
            <p id="career-month-3"></p>
            <p id="career-contents-3"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-4"></p>
            <p id="career-month-4"></p>
            <p id="career-contents-4"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-5"></p>
            <p id="career-month-5"></p>
            <p id="career-contents-5"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-6"></p>
            <p id="career-month-6"></p>
            <p id="career-contents-6"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-7"></p>
            <p id="career-month-7"></p>
            <p id="career-contents-7"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-8"></p>
            <p id="career-month-8"></p>
            <p id="career-contents-8"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-9"></p>
            <p id="career-month-9"></p>
            <p id="career-contents-9"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-10"></p>
            <p id="career-month-10"></p>
            <p id="career-contents-10"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-11"></p>
            <p id="career-month-11"></p>
            <p id="career-contents-11"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-12"></p>
            <p id="career-month-12"></p>
            <p id="career-contents-12"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-13"></p>
            <p id="career-month-13"></p>
            <p id="career-contents-13"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-14"></p>
            <p id="career-month-14"></p>
            <p id="career-contents-14"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-15"></p>
            <p id="career-month-15"></p>
            <p id="career-contents-15"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-16"></p>
            <p id="career-month-16"></p>
            <p id="career-contents-16"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-17"></p>
            <p id="career-month-17"></p>
            <p id="career-contents-17"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-18"></p>
            <p id="career-month-18"></p>
            <p id="career-contents-18"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-19"></p>
            <p id="career-month-19"></p>
            <p id="career-contents-19"></p>
          </div>
		  <div class="resume-line">
            <p id="career-year-20"></p>
            <p id="career-month-20"></p>
            <p id="career-contents-20"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-21"></p>
            <p id="career-month-21"></p>
            <p id="career-contents-21"></p>
          </div>
		  <div class="resume-line">
            <p id="career-year-22"></p>
            <p id="career-month-22"></p>
            <p id="career-contents-22"></p>
          </div>
        </section>
      </section><!-- /.left-page -->
  
      <section class="page right-page">
  
        <section class="education-and-career-history">
          <div class="resume-line resume-line-header">
            <p>年</p>
            <p>月</p>
            <p>学歴・職歴</p>
          </div>
          <div class="resume-line">
            <p id="career-year-23"></p>
            <p id="career-month-23"></p>
            <p id="career-contents-23"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-24"></p>
            <p id="career-month-24"></p>
            <p id="career-contents-24"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-25"></p>
            <p id="career-month-25"></p>
            <p id="career-contents-25"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-26"></p>
            <p id="career-month-26"></p>
            <p id="career-contents-26"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-27"></p>
            <p id="career-month-27"></p>
            <p id="career-contents-27"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-28"></p>
            <p id="career-month-28"></p>
            <p id="career-contents-28"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-29"></p>
            <p id="career-month-29"></p>
            <p id="career-contents-29"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-30"></p>
            <p id="career-month-30"></p>
            <p id="career-contents-30"></p>
          </div>
          <div class="resume-line">
            <p id="career-year-31"></p>
            <p id="career-month-31"></p>
            <p id="career-contents-31"></p>
          </div>
        </section><!-- /.education-and-career-history -->
  
        <section class="qualifications">
          <div class="qualifications-line qualifications-line-header">
            <p>年</p>
            <p>月</p>
            <p>免許・資格</p>
          </div>
          <div class="qualifications-line">
            <p id="qualifications-year-1"></p>
            <p id="qualifications-month-1"></p>
            <p id="qualifications-contents-1"></p>
          </div>
          <div class="qualifications-line">
            <p id="qualifications-year-2"></p>
            <p id="qualifications-month-2"></p>
            <p id="qualifications-contents-2"></p>
          </div>
          <div class="qualifications-line">
            <p id="qualifications-year-3"></p>
            <p id="qualifications-month-3"></p>
            <p id="qualifications-contents-3"></p>
          </div>
          <div class="qualifications-line">
            <p id="qualifications-year-4"></p>
            <p id="qualifications-month-4"></p>
            <p id="qualifications-contents-4"></p>
          </div>
          <div class="qualifications-line">
            <p id="qualifications-year-5"></p>
            <p id="qualifications-month-5"></p>
            <p id="qualifications-contents-5"></p>
          </div>
          <div class="qualifications-line">
            <p id="qualifications-year-6"></p>
            <p id="qualifications-month-6"></p>
            <p id="qualifications-contents-6"></p>
          </div>
        </section><!-- /.qualifications -->
  
        <section class="motivation entry-field">

          <section class="self-promotion entry-field">
            <p class="label">志望の動機、自己PR、趣味、特技など</p>
            <p id="self-promotion" class="multiple-lines"></p>
          </section><!-- /.self-promotion -->
    
          <section class="commuting-time">
            <p class="label">通勤時間</p>
            <div class="commuting-time-line">
              <p class="label">約</p>
              <p id="commuting-hour"></p>
              <p class="label">時間</p>
              <p id="commuting-minutes"></p>
              <p class="label">分</p>
              </div>
          </section><!-- /.commuting-time -->
    
          <section class="dependents">
            <p class="label">扶養家族（配偶者を除く）</p>
            <div class="dependents-line">
              <p id="dependents"></p>
              <p class="label">人</p>  
            </div>
          </section><!-- /.dependents -->
            
          <section class="marital-status">
            <p class="label">配偶者</p>
            <div class="marital-status-line">
              <p id="marital-status">有・無</p>
            </div>
          </section><!-- /.marital-status -->

          <section class="obligation-to-support-spouse">
            <p class="label">配偶者の扶養義務</p>
            <div class="obligation-to-support-spouse-line">
              <p id="obligation-to-support-spouse">有・無</p>
            </div>
          </section><!-- /.obligation-to-support-spouse -->
        </section><!-- /.motivation -->
  
        <section class="objective entry-field">
          <p class="label">本人希望記入欄（特に待遇・職種・勤務時間・その他についての希望などがあれば記入）</p>
          <p class="input-field multiple-lines"></p>
        </section><!-- /.objective -->
  
      </section><!-- /.right-page -->
    </section>

    <div id="help-window">
      <iframe src="help.html" frameborder="0"></iframe>
      <div class="help-close"></div>
    </div>

  </main>
</body>
</html>

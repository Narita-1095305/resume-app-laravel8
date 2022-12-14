<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ asset('/css/b4.css')  }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <main class="flex justify-center">
      <section class="resume">
        <section class="page left-page">
          <section class="resume-header">
            <h2>履　歴　書</h2>
            <div class="creataion-date">
              <p></p>
              <p class="label">年</p> 
              <p></p>
              <p class="label">月</p> 
              <p></p>
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
              <input>
              <img>
            </label>
          </section><!-- /.id-photo -->
    
          <section class="personal-data">
            <div class="basic-data">
              <div class="name-furigana">
                <p class="label">ふりがな</p> 
                <p></p>
              </div> 
              <div class="name">
                <p class="label">氏 名</p> 
                <p></p>
              </div>
              <div class="gender">
                <p>男・女</p>
              </div>
              <div class="birthday">
                <p class="label">生年月日</p>
                <p></p>
                <p class="label">年</p>
                <p></p>
                <p class="label">月</p>
                <p></p>
                <p class="label">日生（満</p>
                <p></p>
                <p class="label">歳）</p>
              </div><!-- /.birthday -->
            </div><!-- /.basic-data -->
  
            <div class="contact-info">
              <div class="resides-furigana">
                <p class="label">ふりがな</p>
                <p></p>
              </div>
              <div class="postal-code">
                <p class="label">現住所</p>
                <p class="label">（〒</p>
                <p></p>
                <p class="label">ー</p>
                <p></p>
                <p class="label">）</p>
              </div>
              <div class="resides">
                <p></p>
              </div>
              <div class="phone-number">
                <p class="label">電話</p>
                <p></p>
              </div>
              <div class="e-mail">
                <p class="label">E-mail</p>
                <p class="multiple-lines"></p>
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
              <p></p>
              <p></p>
              <p>学歴</p>
            </div>
            @foreach($resume->educations as $education)
            <div class="resume-line">
              <p>{{ $education->year }}</p>
              <p>{{ $education->month }}</p>
              <p>{{ $education->background }}</p>
            </div>
            @endforeach
            <div class="resume-line">
              <p></p>
              <p></p>
              <p>職歴</p>
            </div>
            @foreach($resume->works as $work)
            <div class="resume-line">
              <p>{{ $work->year }}</p>
              <p>{{ $work->month }}</p>
              <p>{{ $work->background }}</p>
            </div>
            @endforeach
            <div class="resume-line">
              <p></p>
              <p></p>
              <p>以上</p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
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
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="resume-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
          </section><!-- /.education-and-career-history -->
    
          <section class="qualifications">
            <div class="qualifications-line qualifications-line-header">
              <p>年</p>
              <p>月</p>
              <p>免許・資格</p>
            </div>
            @foreach($resume->licences as $licence)
            <div class="qualifications-line">
              <p>{{ $licence->year }}</p>
              <p>{{ $licence->month }}</p>
              <p>{{ $licence->background }}</p>
            </div>
            @endforeach
            <div class="qualifications-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="qualifications-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="qualifications-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="qualifications-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
            <div class="qualifications-line">
              <p></p>
              <p></p>
              <p></p>
            </div>
          </section><!-- /.qualifications -->
    
          <section class="motivation entry-field">
  
            <section class="self-promotion entry-field">
              <p class="label">志望の動機、自己PR、趣味、特技など</p>
              <p class="multiple-lines">{{ $resume->self_pr }}</p>
            </section><!-- /.self-promotion -->
      
            <section class="commuting-time">
              <p class="label">通勤時間</p>
              <div class="commuting-time-line">
                <p class="label">約</p>
                <p>{{ $resume->commuting_hour }}</p>
                <p class="label">時間</p>
                <p>{{ $resume->commuting_minutes }}</p>
                <p class="label">分</p>
                </div>
            </section><!-- /.commuting-time -->
      
            <section class="dependents">
              <p class="label">扶養家族（配偶者を除く）</p>
              <div class="dependents-line">
                <p></p>
                <p class="label">{{$resume->spouse_num}}人</p>  
              </div>
            </section><!-- /.dependents -->
              
            <section class="marital-status">
              <p class="label">配偶者</p>
              <div class="marital-status-line">
                @if($resume->is_spouse == 0)
                <p>無</p>
                @elseif($resume->is_spouse == 1)
                <p>有</p>
                @else
                <p>有・無</p>
                @endif
              </div>
            </section><!-- /.marital-status -->
  
            <section class="obligation-to-support-spouse">
              <p class="label">配偶者の扶養義務</p>
              <div class="obligation-to-support-spouse-line">
                @if($resume->is_spouse_dependent == 0)
                <p>無</p>
                @elseif($resume->is_spouse_dependent == 1)
                <p>有</p>
                @else
                <p></p>
                @endif
              </div>
            </section><!-- /.obligation-to-support-spouse -->
          </section><!-- /.motivation -->
    
          <section class="objective entry-field">
            <p class="label">本人希望記入欄（特に待遇・職種・勤務時間・その他についての希望などがあれば記入）</p>
            <p class="input-field multiple-lines">{{$resume->other}}</p>
          </section><!-- /.objective -->
    
        </section><!-- /.right-page -->
      </section>
    </main>
  </form>
</body>
</html>

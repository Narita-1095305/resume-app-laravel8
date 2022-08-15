<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/b4.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <main class="flex justify-center">
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
              <p id="phone-number"></p>
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
            <p></p>
            <p></p>
            <p>学歴</p>
          </div>
          @forelse($inputs["education"] as $educations)
            <div class="resume-line">
            @foreach ($educations as $education)
              <p>{{$education}}</p>
            @endforeach
            </div>
          @empty
          <div class="resume-line">
            <p></p>
            <p></p>
            <p>無し</p>
          </div>
          @endforelse
          {{-- @isset($inputs["education"])
            @foreach ($inputs["education"] as $educations)
              <div class="resume-line">
              @foreach ($educations as $education)
                <p>{{$education}}</p>
              @endforeach
              </div>
            @endforeach
          @endisset --}}

          <div class="resume-line">
            <p></p>
            <p></p>
            <p></p>
          </div>
          <div class="resume-line">
            <p></p>
            <p></p>
            <p>職歴</p>
          </div>

          @isset($inputs['work'])
            @foreach ($inputs["work"] as $works)
              <div class="resume-line">
                @foreach ($works as $work)
                  @if($loop->last && is_null($inputs['work']) && (22 - (count($inputs['education']) + count($inputs['work']) + 4) == 0))
                    <p>{{$work}} 以上</p>
                  @else
                  <p>{{$work}}</p>
                  @endif
                @endforeach
                </div>
              @endforeach
              @if(22 - (count($inputs['education']) + count($inputs['work']) + 4) > 0)
                <div class="resume-line">
                  <p></p>
                  <p></p>
                  <p>以上</p>
                </div>
              @endif
              @for($i = 0; $i < 22 - (count($inputs['education']) + count($inputs['work']) + 4); $i++)
              <div class="resume-line">
                <p></p>
                <p></p>
                <p></p>
              </div>
              @endfor
            @else
            <div class="resume-line">
              <p></p>
              <p></p>
              <p>なし</p>
            </div>     
            @for($i = 0; $i < 22 - (count($inputs['education']) + 4); $i++)
              <div class="resume-line">
                <p></p>
                <p></p>
                <p></p>
              </div>
            @endfor
          @endisset
        </section>
      </section><!-- /.left-page -->
  
      <section class="page right-page">
  
        <section class="education-and-career-history">
          <div class="resume-line resume-line-header">
            <p>年</p>
            <p>月</p>
            <p>学歴・職歴</p>
          </div>
          @isset($inputs['work2'])
            @foreach ($inputs["work2"] as $works)
              <div class="resume-line">
              @foreach ($works as $work)
                <p>{{$work}}</p>
              @endforeach
              </div>
            @endforeach
            <div class="resume-line">
              <p></p>
              <p></p>
              <p>以上</p>
            </div>
            @for($i = 0; $i < 8 - count($inputs['work2']); $i++)
              <div class="resume-line">
                <p></p>
                <p></p>
                <p></p>
              </div>
            @endfor
          @else
            @for($i = 0; $i < 8; $i++)
              <div class="resume-line">
                <p></p>
                <p></p>
                <p></p>
              </div>
            @endfor
          @endisset

          
        </section><!-- /.education-and-career-history -->
  
        <section class="qualifications">
          <div class="qualifications-line qualifications-line-header">
            <p>年</p>
            <p>月</p>
            <p>免許・資格</p>
          </div>
          @isset($inputs['licence'])
            @foreach ($inputs["licence"] as $licences)
            <div class="qualifications-line">
              @foreach($licences as $licence)
              <p>{{$licence}}</p>
              @endforeach
            </div>
            @endforeach
          @endisset
          @for($i = 0; $i < 6; $i++)
          <div class="qualifications-line">
            <p></p>
            <p></p>
            <p></p>
          </div>
          @endfor
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

# Web/İnternet Tabanlı Programlama


Bu depo, Karadeniz Teknik Üniversitesi'nde çeşitli bölümlerde verilen **web/internet programlama** derslerindeki içerikleri sunmak için hazırlanmıştır.

Temel seviye PHP dili esas alınarak hazırlanmıştır.

Ders içeriği ve temel kaynaklar KTÜ [**Ders Bilgi Paketi**](http://www.katalog.ktu.edu.tr/DersBilgiPaketi/course.aspx?pid=3678&lang=1&dbid=548157) esas alınarak hazıranmıştır.

---

# 2021-22 Güz Yarıyılı Ders İçeriği

## Yoklama ve Derslere Devam Durumu
Dersin yüz yüze ve çevrimiçi şubeler şeklinde verilmektedir. Öğrencinin dersi verimli bir şekilde öğrenmesi için derse devam sorumluluğunu yerine getirmesi beklenir. Bu nedenle öğrencinin yüzyüze ya da çevrim içi dersler ile paylaşılan ders materyallerini takip etmesi önerilir. 

**_Çevrim içi dersler ile yüzyüze dersler tamamen aynı içeriğe sahiptir._**

* [2021-22 Güz Yarıyılı Yoklama Listesi][yklm21b]

---

## Haftalık Ders İçeriği
Ders içeriği 14 hafta ders, 1 hafta ara sınav ve 1 hafta final olmak üzere 16 hafta olarak planlanmıştır.

| Hafta | Ders İçeriği                                                  | Kaynak ve Açıklamalar   |
| :-- | :--                                                  | :--    |
|       |                                                               | [Ders Notları][ders_not]    |
| 1     | İnternet tabanlı programlamaya giriş ve web sunucu kurulumu   | [Intro][0], [Wamp][1], [Xampp][2], [Replit][3], [W3schools][4] |
| 2     | PHP'ye giriş ve değişkenler                                   | [Replit PHP Kodları][php-kod-02], [Kaynak][5] |
| 3     | PHP metinleri, sayılar, sabitler, Math ve Operatörler         | [Replit PHP Kodları][php-kod-03], [Kaynak][kaynak3]  |
| 4     | PHP Koşul ifadeleri ve Döngülere Giriş (for, ...)             |  [PHP Kodları][php-kod-04], [Kaynak-W3S][kaynak4] |
| 5     | Döngüler (...,while,do-while,foreach,break/continue) ve Fonksiyonlar    | [PHP Kodları][php-kod-05], [Kaynak-W3S][kaynak5]  |
| 6     | PHP'de Diziler ve Süperglobal değişkenler                     | [PHP Kodları][php-kod-06], [Kaynak-W3S][kaynak6]  |
| 7     | PHP Form İşlemleri                                            | [PHP Kodları][php-kod-07], [Kaynak-W3S][kaynak7] <br> GET, POST, Form validation, Form required  |
| 8     | PHP oturum işlemleri (session, cookie)                        | [Kaynak Kodlar][php-kod-08], [Kaynak-W3S][kaynak8] |
| 9     | Ara sınav                                                     | Ödev verildi, teorik sınav yapılmayacak  |
| 10    | PHP ve Veritabanı İşlemleri  (Bağlanma ve Veri Ekleme)      | [kaynak kodlar][php-kod-10] <br> mysqli_connect(), mysqli_query() <br> _INSERT INTO ... VALUES (...)_  |
| 11    | PHP ve MySQL (Veri görüntüleme, güncelleme, silme) - Kullanıcı Kaydı ve Girişi, <br> Soru ekle, güncelle, sil, göster  | _SELECT ... FROM ..._ <br> _UPDATE ... SET ..._ <br> _DELETE FROM ... WHERE ..._ |
| 12    | İlişkili tablolardan veri çekme Örnek Proje-soru beğen, beğenme işlemleri |   |
| 13    | Örnek Proje-Yönetim Paneli Oluşturma                        |   |
| 14    | Örnek Proje-Web sitesini canlıya alma, kurulum                         |   |
| 15    | Ödev değerlendirmesi                          |   |
| 16    | Final Sınavı                                                  | Teorik sınav yapılacak  |


[0]: https://github.com/zyavuz610/learnPHP_inKTU/blob/5205a5cd0d11bd5b0e659d6b9dc6d572a16759e8/images/browser2server.gif
[1]: https://www.wampserver.com/en/
[2]: https://www.apachefriends.org/tr/index.html
[3]: https://replit.com
[4]: https://www.w3schools.com/
[5]: https://www.w3schools.com/php/php_syntax.asp
[yklm21b]: https://docs.google.com/forms/d/e/1FAIpQLSfVCEDtp88MxfLuVd1keBR6TsM46vTCb5KDSF10J1DMqmx0dQ/closedform
[ders_not]: https://docs.google.com/document/d/1COyv8zmO5ISZ-zaChOtJR8u1vShlFNmRFxOmwwDERXA/edit?usp=sharing
[php-kod-02]: https://replit.com/@ZaferYavuz2/02-intro#index.php
[php-kod-03]: https://replit.com/@ZaferYavuz2/03-php-variables
[kaynak3]: https://www.w3schools.com/php/php_if_else.asp
[php-kod-04]: https://replit.com/@ZaferYavuz2/04-if-else#index.php
[kaynak4]: https://www.w3schools.com/php/php_if_else.asp
[php-kod-05]: https://replit.com/@ZaferYavuz2/05-loops-and-functions#index.php
[kaynak5]: https://www.w3schools.com/php/php_looping_while.asp
[php-kod-06]: https://replit.com/@ZaferYavuz2/06-php-arrays#index.php
[kaynak6]: https://www.w3schools.com/php/php_arrays.asp
[php-kod-07]: https://replit.com/@ZaferYavuz2/07-php-forms#index.php
[kaynak7]: https://www.w3schools.com/php/php_forms.asp
[php-kod-08]: https://github.com/zyavuz610/learnPHP_inKTU/tree/main/src/2021-fall(2021-G%C3%BCz)/08-session_cookie
[php-kod-10]: https://github.com/zyavuz610/learnPHP_inKTU/tree/main/src/2021-fall(2021-G%C3%BCz)/10-db_connect_and_insert
[kaynak8]: https://www.w3schools.com/php/php_cookies.asp

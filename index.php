<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curhat Bareng Yuk 👋</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * { margin:0; padding:0; box-sizing:border-box; }
    body { 
      font-family: 'Poppins', sans-serif; 
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
      padding: 20px 10px;
    }
    .container { max-width: 520px; margin: 0 auto; }
    .card {
      background: white;
      border-radius: 24px;
      padding: 32px 24px;
      box-shadow: 0 20px 50px rgba(0,0,0,0.15);
    }
    h1 { font-size: 28px; text-align:center; color:#333; margin-bottom:8px; }
    .wave { animation: wave 2s infinite; }
    @keyframes wave { 0%,100%{transform:rotate(0)} 50%{transform:rotate(20deg)} }
    .subtitle { text-align:center; color:#777; font-size:14px; margin-bottom:35px; }

    .question {
      font-size: 16px;
      font-weight: 600;
      color: #333;
      margin: 30px 0 14px;
    }

    .option {
      position: relative;
      display: block;
      background: #f8f9ff;
      border: 2px solid #e7e7ff;
      border-radius: 16px;
      padding: 16px 56px 16px 20px;
      margin: 11px 0;
      font-size: 15px;
      cursor: pointer;
      transition: all 0.2s;
    }
    .option:hover { border-color: #ff6b9d; background: #fff5f9; transform: translateY(-2px); }

    .option input[type="radio"],
    .option input[type="checkbox"] {
      position: absolute;
      opacity: 0;
      cursor: pointer;
    }

    .checkmark {
      position: absolute;
      right: 18px;
      top: 50%;
      transform: translateY(-50%);
      height: 24px;
      width: 24px;
      background: white;
      border: 2px solid #ddd;
      border-radius: 50%;
    }
    .option input[type="checkbox"] ~ .checkmark { border-radius: 8px; }

    .option input:checked ~ .checkmark {
      background: #ff6b9d;
      border-color: #ff6b9d;
    }
    .option input:checked ~ .checkmark:after {
      content: "";
      position: absolute;
      display: block;
    }
    .option input[type="radio"]:checked ~ .checkmark:after {
      width: 10px; height: 10px;
      background: white;
      border-radius: 50%;
      top: 5px; left: 5px;
    }
    .option input[type="checkbox"]:checked ~ .checkmark:after {
      width: 6px; height: 12px;
      border: solid white;
      border-width: 0 3px 3px 0;
      transform: rotate(45deg);
      top: 3px; left: 8px;
    }

    input[type="time"] {
      width: 100%;
      padding: 16px;
      font-size: 16px;
      border: 2px solid #e7e7ff;
      border-radius: 16px;
      background: #f8f9ff;
    }

    .submit-btn {
      background: linear-gradient(to right, #ff6b9d, #ff8cb4);
      color: white;
      border: none;
      padding: 18px;
      font-size: 18px;
      font-weight: 600;
      border-radius: 50px;
      cursor: pointer;
      width: 100%;
      margin-top: 50px;
      box-shadow: 0 10px 30px rgba(255,107,157,0.4);
      transition: 0.3s;
    }
    .submit-btn:hover { transform: translateY(-4px); box-shadow: 0 15px 35px rgba(255,107,157,0.5); }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <h1>Isi Survey-nya Yuk <span class="wave">👋</span></h1>
      <p class="subtitle">100% anonim • bebas jawab apa adanya 💖</p>

      <form action="submit.php" method="POST">

        <!-- 1. Umur -->
        <div class="question">1. Umur kamu sekarang?</div>
        <label class="option"><input type="radio" name="q1" value="13" required><span class="checkmark"></span>13 tahun</label>
        <label class="option"><input type="radio" name="q1" value="14"><span class="checkmark"></span>14 tahun</label>
        <label class="option"><input type="radio" name="q1" value="15"><span class="checkmark"></span>15 tahun</label>
        <label class="option"><input type="radio" name="q1" value="16"><span class="checkmark"></span>16 tahun</label>
        <label class="option"><input type="radio" name="q1" value="17"><span class="checkmark"></span>17 tahun</label>
        <label class="option"><input type="radio" name="q1" value="18"><span class="checkmark"></span>18 tahun</label>
        <label class="option"><input type="radio" name="q1" value="19"><span class="checkmark"></span>19 tahun</label>
        <label class="option"><input type="radio" name="q1" value="20+"><span class="checkmark"></span>20 tahun atau lebih</label>

        <!-- 2. Kelas -->
        <div class="question">2. Kelas / tingkat kamu sekarang?</div>
        <label class="option"><input type="radio" name="q2" value="SMA 10" required><span class="checkmark"></span>SMA Kelas 10</label>
        <label class="option"><input type="radio" name="q2" value="SMA 11"><span class="checkmark"></span>SMA Kelas 11</label>
        <label class="option"><input type="radio" name="q2" value="SMA 12"><span class="checkmark"></span>SMA Kelas 12</label>
        <label class="option"><input type="radio" name="q2" value="Kuliah"><span class="checkmark"></span>Kuliah (semua semester)</label>
        <label class="option"><input type="radio" name="q2" value="Lainnya"><span

 class="checkmark"></span>Lainnya / sudah lulus</label>

        <!-- 3. Jam pulang -->
        <div class="question">3. Biasanya pulang sekolah/kuliah jam berapa?</div>
        <input type="time" name="q3" required>

        <!-- 4. Habiskan waktu dengan siapa -->
        <div class="question">4. Setelah pulang paling sering sama siapa? (bisa lebih dari satu)</div>
        <label class="option"><input type="checkbox" name="q4[]" value="sendiri"><span class="checkmark"></span>Sendiri</label>
        <label class="option"><input type="checkbox" name="q4[]" value="teman cewek"><span class="checkmark"></span>Teman cewek</label>
        <label class="option"><input type="checkbox" name="q4[]" value="teman cowok"><span class="checkmark"></span>Teman cowok</label>
        <label class="option"><input type="checkbox" name="q4[]" value="pacar"><span class="checkmark"></span>Pacar</label>
        <label class="option"><input type="checkbox" name="q4[]" value="keluarga"><span class="checkmark"></span>Keluarga</label>

        <!-- 5. Keluar malam -->
        <div class="question">5. Seberapa sering keluar malam bareng teman/pacar (sebulan terakhir)?</div>
        <label class="option"><input type="radio" name="q5" value="tidak" required><span class="checkmark"></span>Tidak pernah</label>
        <label class="option"><input type="radio" name="q5" value="1-2"><span class="checkmark"></span>1–2 kali</label>
        <label class="option"><input type="radio" name="q5" value="3-5"><span class="checkmark"></span>3–5 kali</label>
        <label class="option"><input type="radio" name="q5" value=">5"><span class="checkmark"></span>Lebih dari 5 kali</label>

        <!-- 6. Aktivitas kumpul -->
        <div class="question">6. Kalau kumpul bareng paling sering ngapain? (bisa lebih dari satu)</div>
        <label class="option"><input type="checkbox" name="q6[]" value="nonton"><span class="checkmark"></span>Nonton Netflix / film bareng</label>
        <label class="option"><input type="checkbox" name="q6[]" value="game"><span class="checkmark"></span>Main game</label>
        <label class="option"><input type="checkbox" name="q6[]" value="jalan"><span class="checkmark"></span>Jalan-jalan / nongkrong</label>
        <label class="option"><input type="checkbox" name="q6[]" value="ngobrol"><span class="checkmark"></span>Ngobrol santai</label>
        <label class="option"><input type="checkbox" name="q6[]" value="karaoke"><span class="checkmark"></span>Karaoke / nyanyi</label>

        <!-- 7. Tempat berduaan -->
        <div class="question">7. Nyaman berduaan di mana?</div>
        <label class="option"><input type="radio" name="q7" value="umum" required><span class="checkmark"></span>Tempat umum (mall, kafe)</label>
        <label class="option"><input type="radio" name="q7" value="kosan"><span class="checkmark"></span>Kosan teman</label>
        <label class="option"><input type="radio" name="q7" value="rumah"><span class="checkmark"></span>Rumah sendiri (ortu nggak ada)</label>
        <label class="option"><input type="radio" name="q7" value="mobil"><span class="checkmark"></span>Mobil / motor</label>

        <!-- 8. Status pacar -->
        <div class="question">8. Sekarang punya pacar / orang deket banget belum?</div>
        <label class="option"><input type="radio" name="q8" value="belum pernah" required><span class="checkmark"></span>Belum pernah sama sekali</label>
        <label class="option"><input type="radio" name="q8" value="pernah dulu"><span class="checkmark"></span>Pernah dulu, sekarang single</label>
        <label class="option"><input type="radio" name="q8" value="ada"><span class="checkmark"></span>Sedang pacaran / deket</label>

        <!-- 9. Hal yang bikin deket -->
        <div class="question">9. Kalau lagi sayang banget, mana yang bikin “deket banget”?</div>
        <label class="option"><input type="checkbox" name="q9[]" value="chat"><span class="checkmark"></span>Chat tiap hari</label>
        <label class="option"><input type="checkbox" name="q9[]" value="ketemu"><span class="checkmark"></span>Sering ketemu</label>
        <label class="option"><input type="checkbox" name="q9[]" value="pegang"><span class="checkmark"></span>Pegangan tangan</label>
        <label class="option"><input type="checkbox" name="q9[]" value="peluk"><span class="checkmark"></span>Peluk lama</label>
        <label class="option"><input type="checkbox" name="q9[]" value="cium pipi"><span class="checkmark"></span>Cium pipi / dahi</label>

        <!-- 10. Mana yang wajar -->
        <div class="question">10. Menurutmu mana yang “masih wajar” kalau sudah saling suka?</div>
        <label class="option"><input type="checkbox" name="q10[]" value="pegang"><span class="checkmark"></span>Pegangan tangan terus</label>
        <label class="option"><input type="checkbox" name="q10[]" value="peluk lama"><span class="checkmark"></span>Peluk lama-lama</label>
        <label class="option"><input type="checkbox" name="q10[]" value="cium bibir"><span class="checkmark"></span>Ciuman bibir biasa</label>
        <label class="option"><input type="checkbox" name="q10[]" value="cium dalam"><span class="checkmark"></span>Ciuman lama / dalam</label>
        <label class="option"><input type="checkbox" name="q10[]" value="dada luar"><span class="checkmark"></span>Sentuh dada dari luar baju</label>
        <label class="option"><input type="checkbox" name="q10[]" value="intim"><span class="checkmark"></span>Sentuh area lebih intim</label>

        <!-- 11. Respons kalau diminta peluk/ciuman -->
        <div class="question">11. Kalau pacar minta peluk lama atau ciuman, biasanya kamu…</div>
        <label class="option"><input type="radio" name="q11" value="senang" required><span class="checkmark"></span>Langsung oke, senang malah</label>
        <label class="option"><input type="radio" name="q11" value="tergantung"><span class="checkmark"></span>Tergantung mood</label>
        <label class="option"><input type="radio" name="q11" value="ragu"><span class="checkmark"></span>Agak ragu tapi akhirnya boleh</label>
        <label class="option"><input type="radio" name="q11" value="tolak"><span class="checkmark"></span>Menolak</label>

        <!-- 12. Berduaan di tempat sepi -->
        <div class="question">12. Seberapa sering berduaan di tempat sepi dalam 6 bulan terakhir?</div>
        <label class="option"><input type="radio" name="q12" value="belum" required><span class="checkmark"></span>Belum pernah</label>
        <label class="option"><input type="radio" name="q12" value="1-3"><span class="checkmark"></span>1–3 kali</label>
        <label class="option"><input type="radio" name="q12" value="4-10"><span class="checkmark"></span>4–10 kali</label>
        <label class="option"><input type="radio" name="q12" value="banyak"><span class="checkmark"></span>Lebih dari 10 kali</label>

        <!-- 13. Yang pernah dilakukan saat berduaan -->
        <div class="question">13. Kalau lagi berduaan & romantis, mana yang pernah dilakukan? (pilih semua yang pernah)</div>
        <label class="option"><input type="checkbox" name="q13[]" value="peluk biasa"><span class="checkmark"></span>Hanya peluk + cium pipi/dahi</label>
        <label class="option"><input type="checkbox" name="q13[]" value="cium bibir"><span class="checkmark"></span>Ciuman bibir biasa</label>
        <label class="option"><input type="checkbox" name="q13[]" value="cium dalam"><span class="checkmark"></span>Ciuman lebih dalam/lama</label>
        <label class="option"><input type="checkbox" name="q13[]" value="dada luar"><span class="checkmark"></span>Sentuh payudara dari luar baju</label>
        <label class="option"><input type="checkbox" name="q13[]" value="dada dalam"><span class="checkmark"></span>Sentuh payudara langsung</label>
        <label class="option"><input type="checkbox" name="q13[]" value="petting"><span class="checkmark"></span>Petting / saling sentuh intim</label>
        <label class="option"><input type="checkbox" name="q13[]" value="seks"><span class="checkmark"></span>Hubungan intim lengkap</label>

        <!-- 14. Pengaman -->
        <div class="question">14. Kalau pernah hubungan intim, biasanya pakai pengaman?</div>
        <label class="option"><input type="radio" name="q14" value="belum pernah" required><span class="checkmark"></span>Belum pernah → lewati</label>
        <label class="option"><input type="radio" name="q14" value="selalu"><span class="checkmark"></span>Selalu pakai</label>
        <label class="option"><input type="radio" name="q14" value="kadang"><span class="checkmark"></span>Kadang-kadang</label>
        <label class="option"><input type="radio" name="q14" value="jarang"><span class="checkmark"></span>Jarang / nggak pakai</label>

        <!-- 15 – 25 (pertanyaan kunci) -->
        <div class="question">15. Pernah fantasi hal-hal intim sama orang yang disuka?</div>
        <label class="option"><input type="radio" name="q15" value="tidak pernah" required><span class="checkmark"></span>Tidak pernah sama sekali</label>
        <label class="option"><input type="radio" name="q15" value="kadang"><span class="checkmark"></span>Kadang-kadang</label>
        <label class="option"><input type="radio" name="q15" value="sering"><span class="checkmark"></span>Sering</label>
        <label class="option"><input type="radio" name="q15" value="setiap hari"><span class="checkmark"></span>Hampir setiap hari</label>

        <div class="question">16. Nonton adegan ciuman/seks di film biasanya kamu…</div>
        <label class="option"><input type="radio" name="q16" value="biasa" required><span class="checkmark"></span>Biasa aja</label>
        <label class="option"><input type="radio" name="q16" value="degdegan"><span class="checkmark"></span>Agak deg-degan</label>
        <label class="option"><input type="radio" name="q16" value="bayangin"><span class="checkmark"></span>Ikut membayangkan diri sendiri</label>
        <label class="option"><input type="radio" name="q16" value="terangsang"><span class="checkmark"></span>Sampai terangsang</label>

        <div class="question">17. Seberapa penasaran kamu sama “rasanya” berhubungan intim?</div>
        <label class="option"><input type="radio" name="q17" value="tidak" required><span class="checkmark"></span>Tidak penasaran sama sekali</label>
        <label class="option"><input type="radio" name="q17" value="sedikit"><span class="checkmark"></span>Sedikit penasaran</label>
        <label class="option"><input type="radio" name="q17" value="cukup"><span class="checkmark"></span>Cukup penasaran</label>
        <label class="option"><input type="radio" name="q17" value="sangat"><span class="checkmark"></span>Sangat penasaran banget</label>

        <div class="question">18. Kalau pacar yang sangat disayang minta “lebih jauh”, kamu akan…</div>
        <label class="option"><input type="radio" name="q18" value="tolak" required><span class="checkmark"></span>Pasti menolak</label>
        <label class="option"><input type="radio" name="q18" value="mungkin tolak"><span class="checkmark"></span>Mungkin menolak, tergantung</label>
        <label class="option"><input type="radio" name="q18" value="mungkin iya"><span class="checkmark"></span>Mungkin mengiyakan kalau sudah siap</label>
        <label class="option"><input type="radio" name="q18" value="iya"><span class="checkmark"></span>Pasti mengiyakan kalau sudah sayang banget</label>

        <div class="question">19. Pernah curhat sama temen cewek soal ciuman / lebih?</div>
        <label class="option"><input type="radio" name="q19" value="belum" required><span class="checkmark"></span>Belum pernah</label>
        <label class="option"><input type="radio" name="q19" value="pernah biasa"><span class="checkmark"></span>Pernah, biasa aja</label>
        <label class="option"><input type="radio" name="q19" value="pernah malu"><span class="checkmark"></span>Pernah, tapi malu-malu</label>
        <label class="option"><input type="radio" name="q19" value="sering"><span class="checkmark"></span>Sering banget curhat</label>

        <div class="question">20. Kalau temen-temen dekat sudah banyak yang pernah, kamu merasa…</div>
        <label class="option"><input type="radio" name="q20" value="biasa" required><span class="checkmark"></span>Biasa aja</label>
        <label class="option"><input type="radio" name="q20" value="mau coba"><span class="checkmark"></span>Ingin coba juga suatu saat</label>
        <label class="option"><input type="radio" name="q20" value="tekanan"><span class="checkmark"></span>Tekanan supaya ikutan</label>
        <label class="option"><input type="radio" name="q20" value="nggak nyaman"><span class="checkmark"></span>Nggak nyaman</label>

        <!-- 21. Batas terjauh (penting untuk scoring) -->
        <div class="question">21. Batas terjauh yang pernah kamu lakukan dengan lawan jenis?</div>
        <label class="option"><input type="radio" name="q21" value="1a" required><span class="checkmark"></span>Belum pernah pegangan tangan sama sekali</label>
        <label class="option"><input type="radio" name="q21" value="2"><span class="checkmark"></span>Pegangan tangan, peluk, cium pipi/dahi</label>
        <label class="option"><input type="radio" name="q21" value="3"><span class="checkmark"></span>Pernah ciuman bibir</label>
        <label class="option"><input type="radio" name="q21" value="4"><span class="checkmark"></span>Pernah sentuh area payudara</label>
        <label class="option"><input type="radio" name="q21" value="5"><span class="checkmark"></span>Pernah petting / saling sentuh intim</label>
        <label class="option"><input type="radio" name="q21" value="6a"><span class="checkmark"></span>Pernah hubungan intim + pakai pengaman</label>
        <label class="option"><input type="radio" name="q21" value="6b"><span class="checkmark"></span>Pernah hubungan intim + kadang/tanpa pengaman</label>

        <!-- 22. Lokasi kalau pernah petting+ -->
        <div class="question">22. Kalau pernah petting atau lebih, biasanya di mana?</div>
        <label class="option"><input type="radio" name="q22" value="belum" required><span class="checkmark"></span>Belum pernah</label>
        <label class="option"><input type="radio" name="q22" value="rumah/kosan"><span class="checkmark"></span>Rumah / kosan</label>
        <label class="option"><input type="radio" name="q22" value="hotel"><span class="checkmark"></span>Hotel</label>
        <label class="option"><input type="radio" name="q22" value="mobil"><span class="checkmark"></span>Mobil / tempat lain</label>

        <!-- 23. Jumlah pasangan intim -->
        <div class="question">23. Berapa orang yang pernah kamu lakukan hal intim (ciuman ke atas)?</div>
        <label class="option"><input type="radio" name="q23" value="0" required><span class="checkmark"></span>0 orang</label>
        <label class="option"><input type="radio" name="q23" value="1"><span class="checkmark"></span>1 orang</label>
        <label class="option"><input type="radio" name="q23" value="2-3"><span class="checkmark"></span>2–3 orang</label>
        <label class="option"><input type="radio" name="q23" value="4-6"><span class="checkmark"></span>4–6 orang</label>
        <label class="option"><input type="radio" name="q23" value=">6"><span class="checkmark"></span>Lebih dari 6 orang</label>

        <!-- 24. Pendapat tentang hubungan intim -->
        <div class="question">24. Menurutmu berhubungan intim itu… (bisa pilih banyak)</div>
        <label class="option"><input type="checkbox" name="q24[]" value="tunggu nikah"><span class="checkmark"></span>Harus nunggu nikah</label>
        <label class="option"><input type="checkbox" name="q24[]" value="sayang banget"><span class="checkmark"></span>Boleh kalau sudah saling sayang banget</label>
        <label class="option"><input type="checkbox" name="q24[]" value="dewasa aman"><span class="checkmark"></span>Boleh kalau sudah dewasa + pakai pengaman</label>
        <label class="option"><input type="checkbox" name="q24[]" value="bebas"><span class="checkmark"></span>Terserah individu, nggak ada yang salah</label>

        <!-- 25. Kesimpulan diri sendiri -->
        <div class="question">25. Kalau boleh jujur 100% (ini anonim banget), kamu sekarang termasuk yang mana?</div>
        <label class="option"><input type="radio" name="q25" value="polos total" required><span class="checkmark"></span>Masih sangat polos, bahkan pikiran jarang</label>
        <label class="option"><input type="radio" name="q25" value="polos dorongan"><span class="checkmark"></span>Ada pikiran, tapi belum pernah apa-apa</label>
        <label class="option"><input type="radio" name="q25" value="ringan"><span class="checkmark"></span>Sudah pegang tangan, peluk, cium pipi</label>
        <label class="option"><input type="radio" name="q25" value="cium bibir"><span class="checkmark"></span>Sudah pernah ciuman bibir</label>
        <label class="option"><input type="radio" name="q25" value="sentuh dada"><span class="checkmark"></span>Sudah pernah sentuhan area sensitif</label>
        <label class="option"><input type="radio" name="q25" value="petting"><span class="checkmark"></span>Sudah pernah petting</label>
        <label class="option"><input type="radio" name="q25" value="seks aman"><span class="checkmark"></span>Sudah pernah hubungan intim (dengan pengaman)</label>
        <label class="option"><input type="radio" name="q25" value="seks tidak"><span class="checkmark"></span>Sudah pernah hubungan intim (tanpa selalu pakai pengaman)</label>

        <button type="submit" class="submit-btn">Kirim Curhatan Ku 💌</button>
      </form>
    </div>
  </div>
</body>
</html>
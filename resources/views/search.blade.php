<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
</head>
<body>
    <h1>Search Population Data</h1>

    <form action="{{ route('search') }}" method="get">
        <select name="prefecture">
            <option>Total</option>
            <option>全　国</option>
            <option>01 北海道</option>
            <option>02 青森県</option>
            <option>03 岩手県</option>
            <option>04 宮城県</option>
            <option>05 秋田県</option>
            <option>06 山形県</option>
            <option>07 福島県</option>
            <option>08 茨城県</option>
            <option>09 栃木県</option>
            <option>10 群馬県</option>
            <option>11 埼玉県</option>
            <option>12 千葉県</option>
            <option>13 東京都</option>
            <option>14 神奈川県</option>
            <option>15 新潟県</option>
            <option>16 富山県</option>
            <option>17 石川県</option>
            <option>18 福井県</option>
            <option>19 山梨県</option>
            <option>20 長野県</option>
            <option>21 岐阜県</option>
            <option>22 静岡県</option>
            <option>23 愛知県</option>
            <option>24 三重県</option>
            <option>25 滋賀県</option>
            <option>26 京都府</option>
            <option>27 大阪府</option>
            <option>28 兵庫県</option>
            <option>29 奈良県</option>
            <option>30 和歌山県</option>
            <option>31 鳥取県</option>
            <option>32 島根県</option>
            <option>33 岡山県</option>
            <option>34 広島県</option>
            <option>35 山口県</option>
            <option>36 徳島県</option>
            <option>37 香川県</option>
            <option>38 愛媛県</option>
            <option>39 高知県</option>
            <option>40 福岡県</option>
            <option>41 佐賀県</option>
            <option>42 長崎県</option>
            <option>43 熊本県</option>
            <option>44 大分県</option>
            <option>45 宮崎県</option>
            <option>46 鹿児島県</option>
            <option>47 沖縄県</option>
        </select>

        <select name="year">
            <option>1935</option>
            <option>1947</option>
            <option>1950</option>
            <option>1955</option>
            <option>1960</option>
            <option>1965</option>
            <option>1970</option>
            <option>1975</option>
            <option>1980</option>
            <option>1985</option>
            <option>1990</option>
            <option>1995</option>
            <option>2000</option>
            <option>2005</option>
            <option>2010</option>
            <option>2012</option>
            <option>2013</option>
            <option>2014</option>
            <option>2015</option>
            <option>2016</option>
            <option>2017</option>
            <option>2018</option>
            <option>2019</option>
            <option>2020</option>
            <option>2021</option>
            <option>2022</option>
        </select>
        <button type="submit">Get population</button>
    </form>


        <h3>Population Data for {{ $prefecture }} - Year {{ $year }}</h3>
        <table border="1">
            <thead>
                <tr>
                    <th>Prefecture</th>
                    <th>Year</th>
                    <th>Total Population</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $prefecture }}</td>
                    <td>{{ $year }}</td>
                    <td>{{ number_format($population->total_population) }}</td>
                </tr>
            </tbody>
        </table>
</body>
</html>

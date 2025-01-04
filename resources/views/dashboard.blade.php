<x-app-layout>
    <x-slot name="header">
        <nav class="flex items-center justify-between bg-white border-b border-gray-200 px-4 py-2">
            <!-- タブナビゲーション -->
            <div class="flex items-center space-x-6">
                <!-- Dashboardタブ -->
                <a href="{{ route('dashboard') }}" 
                   class="{{ request()->routeIs('dashboard') ? 'text-blue-500 border-b-2 border-blue-500' : 'text-gray-600 hover:text-blue-500' }} font-semibold">
                    Dashboard
                </a>
                <!-- 記録タブ -->
                <a href="{{ route('dashboard.record') }}" 
                   class="{{ request()->routeIs('dashboard.record') ? 'text-blue-500 border-b-2 border-blue-500' : 'text-gray-600 hover:text-blue-500' }} font-semibold">
                    記録
                </a>
                <!-- チャットタブ -->
                <a href="{{ route('dashboard.chat') }}" 
                   class="{{ request()->routeIs('dashboard.chat') ? 'text-blue-500 border-b-2 border-blue-500' : 'text-gray-600 hover:text-blue-500' }} font-semibold">
                    チャット
                </a>
                <!-- レポートタブ -->
                <a href="{{ route('dashboard.report') }}" 
                   class="{{ request()->routeIs('dashboard.report') ? 'text-blue-500 border-b-2 border-blue-500' : 'text-gray-600 hover:text-blue-500' }} font-semibold">
                    レポート
                </a>
            </div>

            <!-- ユーザー情報 -->
            <div class="text-gray-800 font-semibold">
                {{ Auth::user()->name }}
            </div>
        </nav>
    </x-slot>

    @section('content')
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold mb-4">ほけんしつアプリ</h1>

        <!-- 今日の働きやすさ -->
        <div class="bg-blue-100 p-4 rounded-lg mb-6 shadow-md">
            <h2 class="text-xl font-semibold mb-2">今日の働きやすさ</h2>
            <div class="flex items-center">
                <img src="{{ asset('images/cloud.png') }}" alt="Cloud Icon" class="w-12 h-12 mr-4">
                <p>眠気でうまく動けないことも。生理ももうすぐ来るのでナプキンを用意しましょう。<br>月経休暇にはリモート勤務を推奨します。</p>
            </div>
        </div>

        <!-- カレンダー -->
        <div class="bg-white p-4 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold mb-4">2025年1月</h2>
            <table class="table-auto w-full text-center">
                <thead>
                    <tr>
                        <th>日</th>
                        <th>月</th>
                        <th>火</th>
                        <th>水</th>
                        <th>木</th>
                        <th>金</th>
                        <th>土</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- 簡単なカレンダーの例 -->
                    <tr>
                        <td class="text-red-500">31</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td class="text-blue-500">6</td>
                    </tr>
                    <!-- 他の週も同様に作成 -->
                </tbody>
            </table>
            <div class="mt-4 flex justify-between">
                <button class="bg-blue-500 text-white px-4 py-2 rounded shadow">生理がきた</button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded shadow">生理がおわった</button>
            </div>
        </div>
    </div>
    @endsection

</x-app-layout>

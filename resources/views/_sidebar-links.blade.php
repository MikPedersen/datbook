<ul>
    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="{{ route('home') }}"
        >
            Dat Home
        </a>
    </li>

    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href=""
        >
            Explore Dat
        </a>
    </li>

    @auth
    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="{{ route('profile', auth()->user()) }}"
        >
            Dat Profile
        </a>
    </li>

    <li>
        <form method="POST" action="/logout">
            @csrf

            <button class="font-bold text-lg">Dat Logout</button>
        </form>
    </li>
    @endauth
</ul>

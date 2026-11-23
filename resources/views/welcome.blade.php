<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
  />

  <title>RPLANTERZ | RBS Planterz Agri-Supply</title>

  <meta
    name="description"
    content="Browse agricultural products available from RBS Planterz Agri-Supply's Kabacan and M'lang branches."
  />

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            agri: {
              50: "#edf8ef",
              100: "#d8efdc",
              500: "#2e7d32",
              600: "#258b43",
              700: "#176b31",
              800: "#124d2a",
              900: "#0b3520",
            },
          },
          boxShadow: {
            card: "0 16px 35px rgba(0, 0, 0, 0.18)",
          },
        },
      },
    };
  </script>

  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      min-width: 320px;
    }
  </style>
</head>

<body class="m-0 min-h-screen bg-white font-sans text-[#21352a]">

  <!-- Header -->
  <header class="relative z-20 border-b border-slate-100 bg-white">
    <div
      class="flex h-[72px] w-full items-center justify-between px-6 sm:px-10"
    >
      <!-- Logo -->
      <a href="#home" class="flex items-center gap-3" aria-label="RPLANTERZ home">
        <span
          class="grid h-10 w-10 place-items-center rounded-full bg-agri-50 text-[#2e9b43]"
        >
          <svg
            class="h-6 w-6"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.8"
            stroke-linecap="round"
            stroke-linejoin="round"
            aria-hidden="true"
          >
            <path d="M20 4C12 4 6 8 6 14c0 3 2 5 5 5 6 0 9-7 9-15Z"></path>
            <path d="M4 21c2-6 6-9 12-12"></path>
          </svg>
        </span>

        <span>
          <strong
            class="block text-[18px] font-extrabold tracking-[0.06em] text-[#08742e]"
          >
            RPLANTERZ
          </strong>
          <small class="block text-[14px] font-semibold text-[#5d6e63]">
            RBS Planterz Agri-Supply
          </small>
        </span>
      </a>

      <!-- Desktop Navigation -->
      <nav
        class="hidden items-center gap-8 text-[16px] font-semibold md:flex"
        aria-label="Main navigation"
      >
        <a
          href="#home"
          class="text-[#168239] transition hover:text-[#0e642b]"
        >
          Home
        </a>

        <a
          href="#availability"
          class="text-[#36483d] transition hover:text-[#168239]"
        >
          Product Catalog
        </a>

        <span class="h-5 w-px bg-slate-200"></span>

        <a
          href="{{ route('login', ['role' => 'employee']) }}"
          class="flex items-center gap-2 text-[#36483d] transition hover:text-[#168239]"
        >
          <svg
            class="h-4 w-4 text-[#168239]"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.8"
            stroke-linecap="round"
            stroke-linejoin="round"
            aria-hidden="true"
          >
            <circle cx="12" cy="8" r="4"></circle>
            <path d="M4 21a8 8 0 0 1 16 0"></path>
          </svg>

          Employee Login
        </a>

        <a
          href="{{ route('login', ['role' => 'owner']) }}"
          class="rounded border border-[#278d43] px-5 py-2.5 font-bold text-[#147433] transition hover:bg-[#278d43] hover:text-white"
        >
          Owner Login
        </a>
      </nav>

      <!-- Mobile Login -->
      <a
        href="{{ route('login', ['role' => 'employee']) }}"
        class="rounded border border-[#278d43] px-4 py-2 text-[11px] font-bold text-[#147433] md:hidden"
      >
        Login
      </a>
    </div>
  </header>

  <main id="home">

    <!-- Hero -->
    <section class="relative isolate overflow-hidden bg-[#173b2e]">
      <!-- Background Image -->
      <img
        src="{{ asset('assets/rplanterz-farm-landscape.png') }}"
        alt="Green agricultural fields below the mountains"
        class="absolute inset-0 -z-20 h-full w-full object-cover object-center"
      />

      <!-- Dark Overlay -->
      <div
        class="absolute inset-0 -z-10 bg-[linear-gradient(180deg,rgba(14,59,49,.83)_0%,rgba(20,59,44,.72)_45%,rgba(7,31,21,.88)_100%)]"
      ></div>

      <div
        class="mx-auto flex min-h-[750px] max-w-[1240px] flex-col items-center px-5 pb-12 pt-11 text-center text-white sm:px-8"
      >
        <p class="text-[15px] font-bold text-[#63da5a]">
          Welcome to
        </p>

        <!-- Large Brand -->
        <div class="mt-1 flex items-center justify-center gap-3">
          <svg
            class="h-11 w-11 text-[#60d844]"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.8"
            stroke-linecap="round"
            stroke-linejoin="round"
            aria-hidden="true"
          >
            <path d="M20 4C12 4 6 8 6 14c0 3 2 5 5 5 6 0 9-7 9-15Z"></path>
            <path d="M4 21c2-6 6-9 12-12"></path>
          </svg>

          <h1
            class="text-[42px] font-extrabold leading-none tracking-[0.04em] sm:text-[62px]"
          >
            RPLANTERZ
          </h1>
        </div>

        <p class="mt-3 text-[16px] font-semibold text-[#58df47]">
          RBS Planterz Agri-Supply
        </p>

        <!-- Divider -->
        <div class="mt-4 flex items-center justify-center gap-3 text-[#5ddb4f]">
          <span class="h-px w-20 bg-current/50 sm:w-24"></span>

          <svg
            class="h-4 w-4"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.8"
            stroke-linecap="round"
            stroke-linejoin="round"
            aria-hidden="true"
          >
            <path d="M20 4C12 4 6 8 6 14c0 3 2 5 5 5 6 0 9-7 9-15Z"></path>
            <path d="M4 21c2-6 6-9 12-12"></path>
          </svg>

          <span class="h-px w-20 bg-current/50 sm:w-24"></span>
        </div>

        <p
          class="mt-5 max-w-[540px] text-[16px] font-semibold leading-5 text-white/95"
        >
          Your trusted partner for quality agricultural products and dependable
          farming solutions in Kabacan and M'lang.
        </p>

        <!-- Hero Buttons -->
        <div class="mt-5 flex flex-wrap justify-center gap-3">
          <a
            href="#availability"
            class="rounded bg-[#299b46] px-6 py-3 text-[11px] font-bold shadow-lg transition hover:bg-[#21833b]"
          >
            Browse Catalog
            <span class="ml-1" aria-hidden="true">&rarr;</span>
          </a>

          <a
            href="{{ route('login', ['role' => 'employee']) }}"
            class="rounded border border-white/80 bg-white/5 px-5 py-3 text-[11px] font-bold backdrop-blur-sm transition hover:bg-white hover:text-[#184a31]"
          >
            Login
          </a>
        </div>

        <!-- Section Heading -->
        <div class="mt-8">
          <h2 class="text-[28px] font-extrabold leading-tight">
            Everything you need, closer to home.
          </h2>

          <p class="mt-2 text-[14px] font-medium text-white/80">
            Check products online, then visit your preferred branch.
          </p>
        </div>

        <!-- Feature Cards -->
        <div
          class="mt-5 grid w-full max-w-[1000px] gap-4 text-left md:grid-cols-3"
        >

          <!-- Product Availability -->
          <article
            id="availability"
            class="flex min-h-[340px] flex-col rounded-lg border border-white/80 bg-white/95 p-5 text-[#4d5d53] shadow-card backdrop-blur-sm"
          >
            <span
              class="mx-auto grid h-12 w-12 place-items-center rounded-full bg-emerald-50 text-[#14823a]"
            >
              <svg
                class="h-6 w-6"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
              >
                <circle cx="11" cy="11" r="7"></circle>
                <path d="m20 20-4-4"></path>
              </svg>
            </span>

            <h3
              class="mt-3 text-center text-[18px] font-extrabold text-[#147638]"
            >
              Check Product Availability
            </h3>

            <p
              class="mt-2 min-h-14 text-center text-[14px] leading-6 text-[#78847c]"
            >
              Browse our agricultural products and see what's available before
              visiting.
            </p>

            <div class="my-3 h-px bg-[#dbe1dc]"></div>

            <ul class="space-y-2 text-[14px]">
              <li class="flex items-center gap-2">
                <span class="text-[#278d43]">&#10003;</span>
                Search the product catalog
              </li>
              <li class="flex items-center gap-2">
                <span class="text-[#278d43]">&#10003;</span>
                See current availability
              </li>
              <li class="flex items-center gap-2">
                <span class="text-[#278d43]">&#10003;</span>
                No account required
              </li>
            </ul>

            <a
              href="{{ route('catalog.index') }}"
              class="mt-auto flex h-10 items-center justify-center gap-1 rounded bg-[#258b43] text-[14px] font-extrabold text-white transition hover:bg-[#1f7839]"
            >
              Browse Catalog
              <span aria-hidden="true">&rarr;</span>
            </a>
          </article>

          <!-- Branches -->
          <article
            class="flex min-h-[340px] flex-col rounded-lg border border-white/80 bg-white/95 p-5 text-[#4d5d53] shadow-card backdrop-blur-sm"
          >
            <span
              class="mx-auto grid h-12 w-12 place-items-center rounded-full bg-blue-50 text-[#286cca]"
            >
              <svg
                class="h-6 w-6"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
              >
                <path d="M4 10v10h16V10"></path>
                <path d="M3 10l2-6h14l2 6"></path>
                <path
                  d="M3 10a3 3 0 0 0 5 2 3 3 0 0 0 4 0 3 3 0 0 0 4 0 3 3 0 0 0 5-2"
                ></path>
                <path d="M9 20v-5h6v5"></path>
              </svg>
            </span>

            <h3
              class="mt-3 text-center text-[18px] font-extrabold text-[#2563bb]"
            >
              Two Local Branches
            </h3>

            <p
              class="mt-2 min-h-14 text-center text-[14px] leading-6 text-[#78847c]"
            >
              Find supplies closer to you at our Kabacan and M'lang locations.
            </p>

            <div class="my-3 h-px bg-[#dbe1dc]"></div>

            <ul class="space-y-2 text-[14px]">
              <li class="flex items-center gap-2">
                <span class="text-[#286cca]">&#10003;</span>
                Kabacan branch
              </li>
              <li class="flex items-center gap-2">
                <span class="text-[#286cca]">&#10003;</span>
                M'lang branch
              </li>
              <li class="flex items-center gap-2">
                <span class="text-[#286cca]">&#10003;</span>
                Branch-specific inventory
              </li>
            </ul>

            <a
              href="#branches"
              class="mt-auto flex h-10 items-center justify-center gap-1 rounded bg-[#2d70c9] text-[14px] font-extrabold text-white transition hover:bg-[#245fac]"
            >
              View Branches
              <span aria-hidden="true">&rarr;</span>
            </a>
          </article>

          <!-- Pickup and Payment -->
          <article
            class="flex min-h-[340px] flex-col rounded-lg border border-white/80 bg-white/95 p-5 text-[#4d5d53] shadow-card backdrop-blur-sm"
          >
            <span
              class="mx-auto grid h-12 w-12 place-items-center rounded-full bg-orange-50 text-[#ed6c12]"
            >
              <svg
                class="h-6 w-6"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
              >
                <path d="M6 8h12l1 13H5L6 8Z"></path>
                <path d="M9 9V6a3 3 0 0 1 6 0v3"></path>
              </svg>
            </span>

            <h3
              class="mt-3 text-center text-[18px] font-extrabold text-[#df6008]"
            >
              Pickup &amp; Cash Payment
            </h3>

            <p
              class="mt-2 min-h-14 text-center text-[14px] leading-6 text-[#78847c]"
            >
              Choose your items online, then pick up and pay directly at the
              branch.
            </p>

            <div class="my-3 h-px bg-[#dbe1dc]"></div>

            <ul class="space-y-2 text-[14px]">
              <li class="flex items-center gap-2">
                <span class="text-[#ed6c12]">&#10003;</span>
                Convenient branch pickup
              </li>
              <li class="flex items-center gap-2">
                <span class="text-[#ed6c12]">&#10003;</span>
                Cash payment only
              </li>
              <li class="flex items-center gap-2">
                <span class="text-[#ed6c12]">&#10003;</span>
                Simple in-store process
              </li>
            </ul>

            <a
              href="#process"
              class="mt-auto flex h-10 items-center justify-center gap-1 rounded bg-[#ea6909] text-[14px] font-extrabold text-white transition hover:bg-[#cf5c06]"
            >
              How It Works
              <span aria-hidden="true">&rarr;</span>
            </a>
          </article>

        </div>
      </div>
    </section>

    <!-- Process -->
    <section
      id="process"
      class="border-b border-[#e2e9e3] bg-white"
    >
      <div
        class="mx-auto grid max-w-[1100px] gap-6 px-5 py-7 sm:grid-cols-3 sm:px-8"
      >
        <div class="flex items-center gap-3">
          <span
            class="grid h-10 w-10 flex-none place-items-center rounded-full bg-[#eaf6ec] text-[#24863d]"
          >
            <svg
              class="h-4 w-4"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round"
              aria-hidden="true"
            >
              <path d="M6 8h12l1 13H5L6 8Z"></path>
              <path d="M9 9V6a3 3 0 0 1 6 0v3"></path>
            </svg>
          </span>

          <span>
            <strong class="block text-[14px] font-extrabold text-[#203b2a]">
              Browse before you visit
            </strong>
            <small class="mt-1 block text-[14px] text-[#7e8982]">
              Check available products from any device.
            </small>
          </span>
        </div>

        <div class="flex items-center gap-3">
          <span
            class="grid h-10 w-10 flex-none place-items-center rounded-full bg-[#eaf6ec] text-[#24863d]"
          >
            <svg
              class="h-4 w-4"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round"
              aria-hidden="true"
            >
              <path d="M4 10v10h16V10"></path>
              <path d="M3 10l2-6h14l2 6"></path>
              <path d="M9 20v-5h6v5"></path>
            </svg>
          </span>

          <span>
            <strong class="block text-[14px] font-extrabold text-[#203b2a]">
              Pick up at your branch
            </strong>
            <small class="mt-1 block text-[14px] text-[#7e8982]">
              Visit Kabacan or M'lang to collect your items.
            </small>
          </span>
        </div>

        <div class="flex items-center gap-3">
          <span
            class="grid h-10 w-10 flex-none place-items-center rounded-full bg-[#eaf6ec] text-[#24863d]"
          >
            <svg
              class="h-4 w-4"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round"
              aria-hidden="true"
            >
              <path d="m5 12 4 4L19 6"></path>
            </svg>
          </span>

          <span>
            <strong class="block text-[14px] font-extrabold text-[#203b2a]">
              Pay in cash
            </strong>
            <small class="mt-1 block text-[14px] text-[#7e8982]">
              Complete your purchase at the counter.
            </small>
          </span>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer -->
  <footer id="branches" class="bg-[#f5f7f5]">
    <div
      class="mx-auto grid max-w-[1100px] gap-8 px-5 py-10 sm:grid-cols-3 sm:px-8"
    >
      <div>
        <div class="flex items-center gap-2 text-[#08742e]">
          <svg
            class="h-6 w-6"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.8"
            stroke-linecap="round"
            stroke-linejoin="round"
            aria-hidden="true"
          >
            <path d="M20 4C12 4 6 8 6 14c0 3 2 5 5 5 6 0 9-7 9-15Z"></path>
            <path d="M4 21c2-6 6-9 12-12"></path>
          </svg>

          <strong class="text-[16px] tracking-[0.05em]">
            RPLANTERZ
          </strong>
        </div>

        <p class="mt-1 text-[14px] text-[#56675c]">
          RBS Planterz Agri-Supply
        </p>

        <p class="mt-4 text-[14px] font-semibold text-[#3f5146]">
          Growing together, harvesting success.
        </p>
      </div>

      <div>
        <strong class="text-[14px] font-semibold text-[#267038]">
          Kabacan Branch
        </strong>

        <p class="mt-2 text-[14px] text-[#68766d]">
          Kabacan, Cotabato
        </p>

        <p class="mt-2 text-[14px] text-[#68766d]">
          Contact the branch for assistance
        </p>
      </div>

      <div>
        <strong class="text-[14px] font-semibold text-[#267038]">
          M'lang Branch
        </strong>

        <p class="mt-2 text-[14px] text-[#68766d]">
          M'lang, Cotabato
        </p>

        <p class="mt-2 text-[14px] text-[#68766d]">
          Contact the branch for assistance
        </p>
      </div>
    </div>
  </footer>

</body>
</html>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>RPLANTERZ Login</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          boxShadow: {
            card: "0 24px 70px rgba(31, 55, 40, 0.14)",
          },
        },
      },
    };
  </script>

  <style>
    :root {
      --accent: #2e7d32;
      --accent-dark: #176b31;
      --accent-soft: #edf8ef;
      --accent-border: #cce7d1;
    }

    body {
      min-width: 320px;
    }

    .role-text {
      color: var(--accent);
    }

    .role-background {
      background-color: var(--accent-soft);
    }

    .role-border {
      border-color: var(--accent-border);
    }

    .role-button {
      background: linear-gradient(
        135deg,
        var(--accent),
        var(--accent-dark)
      );
    }

    .role-button:hover {
      filter: brightness(0.94);
      transform: translateY(-1px);
    }

    .role-input:focus {
      border-color: var(--accent);
      box-shadow: 0 0 0 3px var(--accent-soft);
    }

    .role-checkbox {
      accent-color: var(--accent);
    }
  </style>
</head>

<body class="bg-[#f7faf7] font-sans text-slate-900">

  <main class="grid min-h-screen lg:grid-cols-2">

    <!-- LEFT SIDE -->
    <section class="relative isolate hidden overflow-hidden lg:block">

      <img
        src="{{ asset('assets/rplanterz-farm-landscape.png') }}"
        alt="RPLANTERZ agricultural farm"
        class="absolute inset-0 -z-30 h-full w-full object-cover"
      />

      <div
        class="absolute inset-0 -z-20 bg-gradient-to-b from-white/60 via-white/20 to-[#062d19]/50"
      ></div>

      <div class="flex min-h-screen flex-col p-10 xl:p-14">

        <!-- Logo -->
        <a href="{{ route('landing') }}" class="flex w-fit items-center gap-3">
          <span
            class="grid h-14 w-14 place-items-center rounded-full bg-white/80 text-[#168039] shadow-sm backdrop-blur"
          >
            <svg
              class="h-9 w-9"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M20 4C12 4 6 8 6 14c0 3 2 5 5 5 6 0 9-7 9-15Z"></path>
              <path d="M4 21c2-6 6-9 12-12"></path>
            </svg>
          </span>

          <span>
            <strong
              class="block text-2xl font-extrabold tracking-wide text-[#106c30]"
            >
              RPLANTERZ
            </strong>

            <small class="block text-lg font-medium text-[#155f2d]">
              RBS Planterz Agri-Supply
            </small>
          </span>
        </a>

        <!-- Main Welcome -->
        <div class="my-auto text-center">
          <p class="text-xl font-bold text-[#126d2f]">
            Welcome to
          </p>

          <div class="mt-3 flex items-center justify-center gap-3">
            <svg
              class="h-14 w-14 text-[#08742e]"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M20 4C12 4 6 8 6 14c0 3 2 5 5 5 6 0 9-7 9-15Z"></path>
              <path d="M4 21c2-6 6-9 12-12"></path>
            </svg>

            <h1
              class="text-5xl font-black tracking-[0.05em] text-[#08742e] xl:text-7xl"
            >
              RPLANTERZ
            </h1>
          </div>

          <p class="mt-3 text-2xl font-bold text-[#146b2e] xl:text-3xl">
            RBS Planterz Agri-Supply
          </p>

          <div class="mx-auto mt-6 flex max-w-md items-center gap-4">
            <span class="h-px flex-1 bg-[#167538]/30"></span>

            <svg
              class="h-6 w-6 text-[#137b34]"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M20 4C12 4 6 8 6 14c0 3 2 5 5 5 6 0 9-7 9-15Z"></path>
              <path d="M4 21c2-6 6-9 12-12"></path>
            </svg>

            <span class="h-px flex-1 bg-[#167538]/30"></span>
          </div>

          <p
            class="mx-auto mt-5 max-w-lg text-lg font-medium leading-8 text-slate-700"
          >
            Your trusted partner for quality agricultural products and
            dependable farming solutions.
          </p>
        </div>

        <!-- Features -->
        <div class="grid grid-cols-3 gap-5">

          <article
            class="rounded-2xl border border-white/70 bg-white/90 p-5 text-center shadow-lg backdrop-blur"
          >
            <svg
              class="mx-auto h-11 w-11 text-[#147334]"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M12 3 4 6v6c0 5 3.4 8.4 8 10 4.6-1.6 8-5 8-10V6l-8-3Z"></path>
              <path d="m8.5 12 2.2 2.2L15.5 9"></path>
            </svg>

            <h2 class="mt-3 text-lg font-extrabold text-[#146b2e]">
              Trusted
            </h2>

            <p class="mt-2 text-lg leading-6 text-slate-600">
              Reliable solutions for your business
            </p>
          </article>

          <article
            class="rounded-2xl border border-white/70 bg-white/90 p-5 text-center shadow-lg backdrop-blur"
          >
            <svg
              class="mx-auto h-11 w-11 text-[#147334]"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M20 4C12 4 6 8 6 14c0 3 2 5 5 5 6 0 9-7 9-15Z"></path>
              <path d="M4 21c2-6 6-9 12-12"></path>
            </svg>

            <h2 class="mt-3 text-lg font-extrabold text-[#146b2e]">
              Quality
            </h2>

            <p class="mt-2 text-lg leading-6 text-slate-600">
              Quality products for better harvest
            </p>
          </article>

          <article
            class="rounded-2xl border border-white/70 bg-white/90 p-5 text-center shadow-lg backdrop-blur"
          >
            <svg
              class="mx-auto h-11 w-11 text-[#147334]"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <circle cx="12" cy="8" r="3"></circle>
              <circle cx="5" cy="10" r="2"></circle>
              <circle cx="19" cy="10" r="2"></circle>
              <path d="M6 20v-2a6 6 0 0 1 12 0v2"></path>
              <path d="M1.5 19v-1a4 4 0 0 1 5-3.9"></path>
              <path d="M22.5 19v-1a4 4 0 0 0-5-3.9"></path>
            </svg>

            <h2 class="mt-3 text-lg font-extrabold text-[#147334]">
              Growth
            </h2>

            <p class="mt-2 text-lg leading-6 text-slate-600">
              Growing together, harvesting success
            </p>
          </article>

        </div>
      </div>
    </section>

    <!-- RIGHT SIDE -->
    <section
      class="flex min-h-screen flex-col bg-[radial-gradient(circle_at_top_right,var(--accent-soft),white_45%)] px-5 py-6 sm:px-10 lg:px-14 xl:px-20"
    >

      <!-- Back to Home -->
      <a
        href="{{ route('landing') }}"
        class="ml-auto flex items-center gap-2 rounded-lg px-3 py-2 text-lg font-semibold text-slate-700 transition hover:bg-white"
      >
        <svg
          class="h-5 w-5"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="1.8"
          stroke-linecap="round"
          stroke-linejoin="round"
        >
          <path d="M19 12H5"></path>
          <path d="m11 18-6-6 6-6"></path>
        </svg>

        Back to Home
      </a>

      <div class="m-auto w-full max-w-[560px] py-8">

        <!-- Login Card -->
        <div
          class="rounded-3xl border border-white bg-white/95 p-6 shadow-card backdrop-blur sm:p-10"
        >

          <!-- Mobile Logo -->
          <div class="mb-7 flex items-center justify-center gap-2 lg:hidden">
            <svg
              class="h-8 w-8 text-[#167538]"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M20 4C12 4 6 8 6 14c0 3 2 5 5 5 6 0 9-7 9-15Z"></path>
              <path d="M4 21c2-6 6-9 12-12"></path>
            </svg>

            <strong class="text-xl font-extrabold text-[#126d2f]">
              RPLANTERZ
            </strong>
          </div>

          <!-- Role Icon -->
          <div
            class="role-background role-text mx-auto grid h-24 w-24 place-items-center rounded-full"
          >
            <svg
              id="roleIcon"
              class="h-12 w-12"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round"
            ></svg>
          </div>

          <!-- Login Heading -->
          <div class="mt-5 text-center">
            <span
              id="roleBadge"
              class="role-background role-text inline-flex rounded-full px-3 py-1 text-lg font-bold"
            >
              OWNER ACCESS
            </span>

            <h2
              id="roleTitle"
              class="mt-3 text-3xl font-extrabold text-slate-900"
            >
              Owner Login
            </h2>

            <p
              id="roleSubtitle"
              class="mt-2 text-lg leading-6 text-slate-500"
            >
              Sign in to manage the entire system.
            </p>
          </div>

          @php
            $hasServerErrors = $errors->any();
          @endphp

          <!-- Error Alert -->
          <div
            id="errorAlert"
            class="mt-7 {{ $hasServerErrors ? 'flex' : 'hidden' }} items-center gap-3 rounded-xl border border-red-300 bg-red-50 px-4 py-4 text-lg font-semibold text-red-700"
            role="alert"
          >
            <svg
              class="h-6 w-6 flex-none"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M12 3 2.5 20h19L12 3Z"></path>
              <path d="M12 9v5"></path>
              <path d="M12 17.5h.01"></path>
            </svg>

            <span id="errorMessage">
              {{ $hasServerErrors ? $errors->first() : 'Invalid email or password.' }}
            </span>

            <button
              id="closeError"
              type="button"
              class="ml-auto rounded p-1 hover:bg-red-100"
              aria-label="Close error"
            >
              <svg
                class="h-4 w-4"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
              >
                <path d="m6 6 12 12"></path>
                <path d="M18 6 6 18"></path>
              </svg>
            </button>
          </div>

          <!-- Login Form -->
          <form id="loginForm" method="POST" action="{{ route('login.attempt') }}" class="mt-7" novalidate>
            @csrf

            <input
              id="roleInput"
              name="role"
              type="hidden"
              value="{{ old('role', request('role', request('portal', 'owner'))) }}"
            />

            <!-- Email -->
            <div>
              <label
                for="email"
                class="mb-2 block text-lg font-bold text-slate-800"
              >
                Email Address
              </label>

              <div class="relative">
                <svg
                  class="pointer-events-none absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-500"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.8"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                  <path d="m3 7 9 6 9-6"></path>
                </svg>

                <input
                  id="email"
                  name="email"
                  type="email"
                  value="{{ old('email') }}"
                  autocomplete="email"
                  placeholder="Enter your email address"
                  class="role-input h-12 w-full rounded-xl border border-slate-300 bg-white pl-12 pr-4 text-lg outline-none transition placeholder:text-slate-400"
                  required
                />
              </div>
            </div>

            <!-- Password -->
            <div class="mt-5">
              <label
                for="password"
                class="mb-2 block text-lg font-bold text-slate-800"
              >
                Password
              </label>

              <div class="relative">
                <svg
                  class="pointer-events-none absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-500"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.8"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <rect x="5" y="10" width="14" height="11" rx="2"></rect>
                  <path d="M8 10V7a4 4 0 0 1 8 0v3"></path>
                </svg>

                <input
                  id="password"
                  name="password"
                  type="password"
                  autocomplete="current-password"
                  placeholder="Enter your password"
                  class="role-input h-12 w-full rounded-xl border border-slate-300 bg-white pl-12 pr-12 text-lg outline-none transition placeholder:text-slate-400"
                  required
                />

                <button
                  id="passwordToggle"
                  type="button"
                  class="absolute right-4 top-1/2 -translate-y-1/2 rounded text-slate-500 hover:text-slate-900"
                  aria-label="Show password"
                >
                  <svg
                    class="h-5 w-5"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                    <circle cx="12" cy="12" r="2.5"></circle>
                  </svg>
                </button>
              </div>
            </div>

            <!-- Remember -->
            <div class="mt-5 flex items-center justify-between gap-4">
              <label
                class="flex cursor-pointer items-center gap-3 text-lg text-slate-700"
              >
                <input
                  type="checkbox"
                  name="remember"
                  value="1"
                  {{ old('remember') ? 'checked' : '' }}
                  class="role-checkbox h-5 w-5 rounded border-slate-300"
                />

                Remember me
              </label>

              <span class="text-lg text-slate-400">
                Contact Owner for password reset
              </span>
            </div>

            <!-- Submit Button -->
            <button
              id="loginButton"
              type="submit"
              class="role-button mt-7 flex h-12 w-full items-center justify-center gap-2 rounded-xl text-lg font-bold text-white shadow-lg transition"
            >
              <svg
                class="h-5 w-5"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <rect x="5" y="10" width="14" height="11" rx="2"></rect>
                <path d="M8 10V7a4 4 0 0 1 8 0v3"></path>
              </svg>

              <span id="loginButtonText">
                Login as Owner
              </span>
            </button>

          </form>
        </div>

        <!-- Secure Login -->
        <div class="mt-7 flex items-center justify-center gap-3">
          <span
            class="role-background role-text role-border grid h-11 w-11 place-items-center rounded-full border"
          >
            <svg
              class="h-6 w-6"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M12 3 4 6v6c0 5 3.4 8.4 8 10 4.6-1.6 8-5 8-10V6l-8-3Z"></path>
              <path d="m8.5 12 2.2 2.2L15.5 9"></path>
            </svg>
          </span>

          <span>
            <strong class="role-text block text-lg">
              Secure login
            </strong>

            <small class="mt-1 block text-lg text-slate-500">
              Your login information is protected
            </small>
          </span>
        </div>

      </div>
    </section>

  </main>

  <script>
    const roleConfigurations = {
      owner: {
        title: "Owner Login",
        badge: "OWNER ACCESS",
        subtitle: "Sign in to manage branches, staff, inventory, and finances.",
        button: "Login as Owner",
        accent: "#2e7d32",
        accentDark: "#176b31",
        accentSoft: "#edf8ef",
        accentBorder: "#cce7d1",
        icon: `
          <circle cx="12" cy="7" r="4"></circle>
          <path d="M5 21v-2a7 7 0 0 1 14 0v2"></path>
          <path d="M17 11h4v7h-4z"></path>
          <path d="M18 11V9.5a1 1 0 0 1 2 0V11"></path>
        `,
      },
      cashier: {
        title: "Cashier Login",
        badge: "CASHIER ACCESS",
        subtitle: "Sign in to process sales, payments, receipts, and customer transactions.",
        button: "Login as Cashier",
        accent: "#2563eb",
        accentDark: "#1d4ed8",
        accentSoft: "#eff6ff",
        accentBorder: "#bfdbfe",
        icon: `
          <rect x="4" y="5" width="16" height="15" rx="2"></rect>
          <path d="M7 9h10"></path>
          <path d="M8 13h2"></path>
          <path d="M14 13h2"></path>
          <path d="M8 17h2"></path>
          <path d="M14 17h2"></path>
        `,
      },
      checker: {
        title: "Checker Login",
        badge: "CHECKER ACCESS",
        subtitle: "Sign in to verify inventory, receive stocks, and review branch transfers.",
        button: "Login as Checker",
        accent: "#d97706",
        accentDark: "#b45309",
        accentSoft: "#fff7ed",
        accentBorder: "#fed7aa",
        icon: `
          <path d="M12 3 4 6v6c0 5 3.4 8.4 8 10 4.6-1.6 8-5 8-10V6l-8-3Z"></path>
          <path d="m8.5 12 2.2 2.2L15.5 9"></path>
        `,
      },
      employee: {
        title: "Employee Login",
        badge: "EMPLOYEE ACCESS",
        subtitle: "Sign in with your assigned Cashier or Checker account.",
        button: "Login to Employee Portal",
        accent: "#168039",
        accentDark: "#115e2a",
        accentSoft: "#edf8ef",
        accentBorder: "#cce7d1",
        icon: `
          <circle cx="12" cy="8" r="4"></circle>
          <path d="M4 21a8 8 0 0 1 16 0"></path>
        `,
      },
    };

    const urlParameters = new URLSearchParams(window.location.search);
    const initialRole = (
      urlParameters.get("role") ||
      urlParameters.get("portal") ||
      document.getElementById("roleInput").value ||
      "owner"
    ).toLowerCase();

    const selectedRole = roleConfigurations[initialRole] ? initialRole : "owner";
    const role = roleConfigurations[selectedRole];

    document.documentElement.style.setProperty("--accent", role.accent);
    document.documentElement.style.setProperty("--accent-dark", role.accentDark);
    document.documentElement.style.setProperty("--accent-soft", role.accentSoft);
    document.documentElement.style.setProperty("--accent-border", role.accentBorder);

    document.title = role.title + " | RPLANTERZ";
    document.getElementById("roleTitle").textContent = role.title;
    document.getElementById("roleBadge").textContent = role.badge;
    document.getElementById("roleSubtitle").textContent = role.subtitle;
    document.getElementById("loginButtonText").textContent = role.button;
    document.getElementById("roleInput").value = selectedRole;
    document.getElementById("roleIcon").innerHTML = role.icon;

    const passwordInput = document.getElementById("password");
    const passwordToggle = document.getElementById("passwordToggle");

    passwordToggle.addEventListener("click", function () {
      const passwordIsHidden = passwordInput.type === "password";
      passwordInput.type = passwordIsHidden ? "text" : "password";
      passwordToggle.setAttribute("aria-label", passwordIsHidden ? "Hide password" : "Show password");
    });

    const errorAlert = document.getElementById("errorAlert");
    const errorMessage = document.getElementById("errorMessage");
    const closeError = document.getElementById("closeError");

    function showError(message) {
      errorMessage.textContent = message;
      errorAlert.classList.remove("hidden");
      errorAlert.classList.add("flex");
    }

    function hideError() {
      errorAlert.classList.add("hidden");
      errorAlert.classList.remove("flex");
    }

    closeError.addEventListener("click", hideError);

    const loginForm = document.getElementById("loginForm");

    loginForm.addEventListener("submit", function (event) {
      hideError();

      const email = document.getElementById("email").value.trim();
      const password = passwordInput.value.trim();

      if (!email || !password) {
        event.preventDefault();
        showError("Please enter your email address and password.");
      }
    });
  </script>

</body>
</html>

<x-layout>
    <!-- Hero Section -->
    <section style="max-width:1200px; margin:60px auto; padding:60px 40px; display:flex; flex-wrap:wrap; align-items:center; justify-content:space-between; font-family:Segoe UI, Arial, sans-serif; border-radius:12px; background: linear-gradient(135deg, #e0f2fe 0%, #f8fafc 100%); box-shadow:0 10px 30px rgba(0,0,0,0.05);">

        <!-- Left Side: Text -->
        <div style="flex:1; min-width:280px; padding-right:20px;">
            <h1 style="font-size:48px; font-weight:700; color:#0f172a; margin-bottom:20px; line-height:1.2;">
                Hi, I’m <span style="color:#38bdf8;">Ghanashyam Budhathoki</span>
            </h1>
            <p style="font-size:18px; color:#4b5563; margin-bottom:40px; line-height:1.7;">
                Programmer, Writer, and problem solver. I create clean, efficient software and share knowledge to empower others in tech.
            </p>

            <!-- Call-to-Action Buttons -->
            <div style="display:flex; gap:15px; flex-wrap:wrap;">
                <a href="/about" style="text-decoration:none;">
                    <button style="padding:14px 28px; border-radius:12px; border:none; background:rgba(56,189,248,0.9); color:white; font-weight:600; font-size:16px; cursor:pointer; backdrop-filter:blur(4px); box-shadow:0 8px 20px rgba(56,189,248,0.3); transition:all 0.3s ease;">
                        About Me
                    </button>
                </a>
                <a href="/contact" style="text-decoration:none;">
                    <button style="padding:14px 28px; border-radius:12px; border:none; background:#0f172a; color:white; font-weight:600; font-size:16px; cursor:pointer; box-shadow:0 8px 20px rgba(0,0,0,0.2); transition:all 0.3s ease;">
                        Contact Me
                    </button>
                </a>
            </div>
        </div>

        <!-- Right Side: Hero Image -->
        <div style="flex:1; min-width:280px; display:flex; justify-content:center; align-items:center;">
            <img src="https://imgs.search.brave.com/ajqs--cZc1qdP0BViTyv1qQzae0mVJwHem5qV_c4MR0/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zdGF0/aWMudmVjdGVlenku/Y29tL3N5c3RlbS9y/ZXNvdXJjZXMvdGh1/bWJuYWlscy8wNDgv/MjM0LzU0Mi9zbWFs/bC9hLW1hbi1pcy1z/aXR0aW5nLW9uLXRo/ZS1mbG9vci13aXRo/LWEtbGFwdG9wLWlu/LWZyb250LW9mLWhp/bS1wcm9ncmFtbWVy/LXByb2Zlc3Npb24t/cG5nLnBuZw" alt="Hero Image" style="width:100%; max-width:400px; border-radius:16px; box-shadow:0 12px 28px rgba(0,0,0,0.12); transition:transform 0.4s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
        </div>
    </section>

    <!-- Featured Skills Section -->
    <section style="max-width:1000px; margin:80px auto; padding:0 20px; font-family:Segoe UI, Arial, sans-serif;">
        <h2 style="font-size:32px; color:#0f172a; margin-bottom:35px; text-align:center;">What I Do</h2>
        <div style="display:flex; flex-wrap:wrap; gap:25px; justify-content:center;">

            <!-- Skill Card 1 -->
            <div style="flex:1; min-width:280px; background:rgba(255,255,255,0.95); border-radius:16px; padding:30px; box-shadow:0 12px 28px rgba(0,0,0,0.08); transition:all 0.4s ease; cursor:pointer;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 12px 28px rgba(0,0,0,0.08)'">
                <h3 style="font-size:22px; margin-bottom:12px; color:#0f172a;">Web Development</h3>
                <p style="font-size:15px; color:#4b5563; line-height:1.6;">
                    Build responsive, modern websites using HTML, CSS, JavaScript, and frameworks like Laravel and Flutter Web.
                </p>
            </div>

            <!-- Skill Card 2 -->
            <div style="flex:1; min-width:280px; background:rgba(255,255,255,0.95); border-radius:16px; padding:30px; box-shadow:0 12px 28px rgba(0,0,0,0.08); transition:all 0.4s ease; cursor:pointer;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 12px 28px rgba(0,0,0,0.08)'">
                <h3 style="font-size:22px; margin-bottom:12px; color:#0f172a;">Programming & Dart/Flutter</h3>
                <p style="font-size:15px; color:#4b5563; line-height:1.6;">
                    Create cross-platform apps with Flutter and efficient backend solutions using PHP.
                </p>
            </div>

            <!-- Skill Card 3 -->
            <div style="flex:1; min-width:280px; background:rgba(255,255,255,0.95); border-radius:16px; padding:30px; box-shadow:0 12px 28px rgba(0,0,0,0.08); transition:all 0.4s ease; cursor:pointer;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 12px 28px rgba(0,0,0,0.08)'">
                <h3 style="font-size:22px; margin-bottom:12px; color:#0f172a;">Technical Writing & Teaching</h3>
                <p style="font-size:15px; color:#4b5563; line-height:1.6;">
                    Write tutorials, guides, and courses to help learners master programming and solve real-world problems efficiently.
                </p>
            </div>

        </div>
    </section>
</x-layout>

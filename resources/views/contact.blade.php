<x-layout>
    <section style="max-width:900px; margin:60px auto; padding:40px; background:#ffffff; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.1); font-family:Segoe UI, Arial, sans-serif;">

        <h1 style="font-size:32px; margin-bottom:12px; color:#0f172a;">Contact me</h1>

        <p style="font-size:16px; color:#4b5563; margin-bottom:30px;">
            I would love to hear from you! Reach out via Email, WhatsApp, LinkedIn, or GitHub.
        </p>

        <div style="display:flex; flex-direction:column; gap:16px; margin-bottom:30px;">
            <div style="display:flex; align-items:center; gap:12px; font-size:15px; color:#0f172a;">
                <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" alt="Email" style="height:20px;"> ghanashyambudhathoki03@gmail.com
            </div>
            <div style="display:flex; align-items:center; gap:12px; font-size:15px; color:#0f172a;">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp" style="height:20px;"> +9779865438982
            </div>
            <div style="display:flex; align-items:center; gap:12px; font-size:15px; color:#0f172a;">
                <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" alt="Location" style="height:20px;"> Dolakha, Nepal
            </div>
        </div>

        <!-- Social Media Buttons -->
        <div style="display:flex; flex-wrap:wrap; gap:15px; margin-top:20px;">

            <a href="https://np.linkedin.com/in/ghanashyam-budhathoki-3a7014381" target="_blank" class="social-btn linkedin">
                <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn" style="height:20px;"> LinkedIn
            </a>

            <a href="https://wa.me/9779865438982" target="_blank" class="social-btn whatsapp">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp" style="height:20px;"> WhatsApp
            </a>

            <a href="mailto:ghanashyambudhathoki03@gmail.com" class="social-btn email">
                <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" alt="Email" style="height:20px;"> Email
            </a>

            <a href="https://github.com/ghanashyambudhathoki01" target="_blank" class="social-btn github">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733553.png" alt="GitHub" style="height:20px;"> GitHub
            </a>

        </div>
    </section>

    <!-- Hover Styles -->
    <style>
        .social-btn {
            display:flex;
            align-items:center;
            gap:8px;
            padding:12px 18px;
            border-radius:8px;
            font-weight:500;
            font-size:16px;
            text-decoration:none;
            color:white;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .social-btn img {
            display:inline-block; /* ensures logo always visible */
        }

        /* Brand Colors */
        .linkedin { background: #428496; }
        .whatsapp { background:#25D366; }
        .email { background:#D44638; }
        .github { background:#333; }

        /* Hover Effects */
        .social-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
    </style>
</x-layout>

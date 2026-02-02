<x-layout>
    <section style="max-width:1000px; margin:60px auto; padding:40px; font-family:Segoe UI, Arial, sans-serif;">

        <!-- Page Title -->
        <h1 style="font-size:32px; margin-bottom:20px; color:#0f172a;">My Services</h1>

        <!-- Short Description -->
        <p style="font-size:16px; color:#4b5563; margin-bottom:40px; line-height:1.6;">
            I offer a range of services that combine technical expertise and creativity to deliver high-quality results.  
            Explore how I can help bring your ideas to life.
        </p>

        <!-- Services Grid -->
        <div style="display:flex; flex-wrap:wrap; gap:25px;">
            
            <!-- Service Card 1 -->
            <div class="service-card">
                <h3>Web Development</h3>
                <p>Create responsive, modern websites using HTML, CSS, JavaScript, and Laravel with clean, efficient code.</p>
            </div>

            <!-- Service Card 2 -->
            <div class="service-card">
                <h3>Mobile App Development</h3>
                <p>Build cross-platform apps for Android, iOS, and Web using Dart and Flutter with smooth UI and functionality.</p>
            </div>

            <!-- Service Card 3 -->
            <div class="service-card">
                <h3>Technical Writing & Tutorials</h3>
                <p>Write guides, tutorials, and courses to help beginners and professionals learn programming efficiently.</p>
            </div>

            <!-- Service Card 4 -->
            <div class="service-card">
                <h3>Video Editing & Creative Projects</h3>
                <p>Edit videos, create engaging content, and develop creative solutions to enhance your digital presence.</p>
            </div>

        </div>

        <!-- Service Card Styles -->
        <style>
            .service-card {
                flex:1;
                min-width:250px;
                background:#ffffff;
                border-radius:12px;
                padding:25px;
                box-shadow:0 4px 15px rgba(0,0,0,0.08);
                transition:transform 0.3s ease, box-shadow 0.3s ease;
                cursor:pointer;
            }

            .service-card h3 {
                font-size:20px;
                margin-bottom:12px;
                color:#0f172a;
            }

            .service-card p {
                font-size:15px;
                color:#4b5563;
                line-height:1.5;
            }

            /* Hover Animation */
            .service-card:hover {
                transform: translateY(-6px);
                box-shadow:0 12px 25px aquamarine;
            }
        </style>

    </section>
</x-layout>

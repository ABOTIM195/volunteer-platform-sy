<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('سياسة الخصوصية') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-6">سياسة الخصوصية لمنصة التطوع السورية</h3>
                    <p class="mb-6">آخر تحديث: {{ date('d/m/Y') }}</p>

                    <div class="space-y-8">
                        <!-- القسم 1 -->
                        <div>
                            <h4 class="text-primary font-bold mb-3">1. مقدمة</h4>
                            <p class="mb-3">تلتزم منصة التطوع السورية بحماية خصوصيتك. توضح سياسة الخصوصية هذه كيفية جمعنا واستخدامنا وحمايتنا لمعلوماتك الشخصية عند استخدام منصتنا.</p>
                            <p>من خلال استخدام منصتنا، فإنك توافق على جمع ومعالجة بياناتك وفقًا لهذه السياسة.</p>
                        </div>

                        <!-- القسم 2 -->
                        <div>
                            <h4 class="text-primary font-bold mb-3">2. المعلومات التي نجمعها</h4>
                            <p class="mb-3">قد نجمع المعلومات التالية:</p>
                            <ul class="list-disc pr-5 space-y-2">
                                <li>معلومات التعريف الشخصية (الاسم، البريد الإلكتروني، رقم الهاتف، العنوان)</li>
                                <li>معلومات الملف الشخصي (الصورة، المهارات، مجالات الاهتمام)</li>
                                <li>معلومات التبرع (تفاصيل الدفع، سجل التبرعات)</li>
                                <li>معلومات سجل التطوع (الفرص التي شاركت فيها، التقييمات)</li>
                                <li>معلومات الاستخدام (كيفية تفاعلك مع المنصة)</li>
                                <li>معلومات الجهاز والموقع</li>
                            </ul>
                        </div>

                        <!-- القسم 3 -->
                        <div>
                            <h4 class="text-primary font-bold mb-3">3. كيفية استخدام معلوماتك</h4>
                            <p class="mb-3">نستخدم معلوماتك للأغراض التالية:</p>
                            <ul class="list-disc pr-5 space-y-2">
                                <li>إنشاء وإدارة حسابك</li>
                                <li>توفير وتحسين خدماتنا</li>
                                <li>ربطك بفرص التطوع المناسبة</li>
                                <li>معالجة التبرعات والمدفوعات</li>
                                <li>التواصل معك بشأن الفرص والتحديثات</li>
                                <li>تحليل استخدام المنصة وتحسينها</li>
                                <li>الامتثال للمتطلبات القانونية</li>
                            </ul>
                        </div>

                        <!-- القسم 4 -->
                        <div>
                            <h4 class="text-primary font-bold mb-3">4. مشاركة المعلومات</h4>
                            <p class="mb-3">قد نشارك معلوماتك مع:</p>
                            <ul class="list-disc pr-5 space-y-2">
                                <li>المنظمات التي تتطوع معها أو تتبرع لها</li>
                                <li>مزودي الخدمات الذين يساعدوننا في تشغيل المنصة</li>
                                <li>الجهات الحكومية عند الضرورة بموجب القانون</li>
                            </ul>
                            <p class="mt-3">لن نبيع أو نؤجر معلوماتك الشخصية لأطراف ثالثة لأغراض تسويقية دون موافقتك الصريحة.</p>
                        </div>

                        <!-- القسم 5 -->
                        <div>
                            <h4 class="text-primary font-bold mb-3">5. حماية المعلومات</h4>
                            <p class="mb-3">نطبق إجراءات أمنية مناسبة لحماية معلوماتك من الوصول غير المصرح به أو التغيير أو الإفصاح أو الإتلاف. تشمل هذه الإجراءات التشفير، والوصول المحدود للموظفين، والضمانات المادية للخوادم التي تخزن معلوماتك.</p>
                            <p>على الرغم من اتخاذنا تدابير للحماية، لا يمكننا ضمان أمان المعلومات المرسلة عبر الإنترنت بشكل مطلق.</p>
                        </div>

                        <!-- القسم 6 -->
                        <div>
                            <h4 class="text-primary font-bold mb-3">6. ملفات تعريف الارتباط وتقنيات التتبع</h4>
                            <p class="mb-3">نستخدم ملفات تعريف الارتباط وتقنيات مماثلة لتحسين تجربتك وجمع معلومات حول كيفية استخدامك للمنصة. يمكنك ضبط متصفحك لرفض ملفات تعريف الارتباط، ولكن قد يؤثر ذلك على قدرتك على استخدام بعض ميزات المنصة.</p>
                        </div>

                        <!-- القسم 7 -->
                        <div>
                            <h4 class="text-primary font-bold mb-3">7. حقوقك</h4>
                            <p class="mb-3">تتمتع بالحقوق التالية فيما يتعلق بمعلوماتك الشخصية:</p>
                            <ul class="list-disc pr-5 space-y-2">
                                <li>الوصول إلى المعلومات التي نحتفظ بها عنك</li>
                                <li>تصحيح أي معلومات غير دقيقة</li>
                                <li>طلب حذف معلوماتك (مع مراعاة بعض القيود القانونية)</li>
                                <li>الاعتراض على معالجة معلوماتك لأغراض معينة</li>
                                <li>طلب تقييد معالجة معلوماتك</li>
                                <li>سحب موافقتك في أي وقت</li>
                            </ul>
                            <p class="mt-3">لممارسة أي من هذه الحقوق، يرجى التواصل معنا عبر البريد الإلكتروني privacy@volunteer-platform.sy.</p>
                        </div>

                        <!-- القسم 8 -->
                        <div>
                            <h4 class="text-primary font-bold mb-3">8. تغييرات على سياسة الخصوصية</h4>
                            <p class="mb-3">قد نقوم بتحديث سياسة الخصوصية هذه من وقت لآخر. سنخطرك بأي تغييرات جوهرية من خلال نشر السياسة المحدثة على منصتنا أو عبر البريد الإلكتروني. نشجعك على مراجعة هذه الصفحة بانتظام للاطلاع على أحدث المعلومات حول ممارسات الخصوصية لدينا.</p>
                        </div>

                        <!-- القسم 9 -->
                        <div>
                            <h4 class="text-primary font-bold mb-3">9. الاتصال بنا</h4>
                            <p>إذا كان لديك أي أسئلة حول سياسة الخصوصية هذه أو ممارسات الخصوصية لدينا، يرجى التواصل معنا على البريد الإلكتروني privacy@volunteer-platform.sy أو عبر الهاتف على الرقم +963 911 234567.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 
<x-app-layout>
        <!-- Contenu Principal -->
        <main class="max-w-7xl mx-auto mt-16 px-10 m sm:px-6 lg:px-8 py-8">
            <!-- Section Bienvenue -->
            <div class="bg-gradient-to-r from-blue-500 to-teal-500 rounded-2xl shadow-xl overflow-hidden mb-8">
                <div class="p-8 md:p-12">
                    <div class="md:flex items-center justify-between">
                        <div class="md:w-2/3">
                            <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">Bienvenue sur E-Health<span class="text-blue-100">Pro</span>, <span class="text-yellow-300">Dr. {{ Auth::user()->name }}
</span></h1>
                            <p class="text-lg text-blue-100 mb-6">Votre plateforme de gestion médicale complète. Accédez à vos consultations, dossiers patients et outils de diagnostic en un clic.</p>
                            <div class="flex flex-wrap gap-4">
                                <a href="#" class="bg-white text-blue-600 hover:bg-blue-50 font-semibold py-3 px-6 rounded-lg shadow-md transition duration-300">
                                    <i class="fas fa-calendar-plus mr-2"></i>Nouvelle Consultation
                                </a>
                                <a href="#" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-blue-600 font-semibold py-3 px-6 rounded-lg transition duration-300">
                                    <i class="fas fa-user-md mr-2"></i>Voir Mes Patients
                                </a>
                            </div>
                        </div>
                        <div class="hidden md:block md:w-1/3 text-center">
                            <i class="fas fa-stethoscope text-white opacity-20 text-9xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistiques Rapides -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Carte Consultation du jour -->
                <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Consultations Aujourd'hui</p>
                            <h3 class="text-3xl font-bold text-gray-900 mt-2">8</h3>
                        </div>
                        <div class="bg-blue-100 p-3 rounded-full">
                            <i class="fas fa-calendar-check text-blue-600 text-2xl"></i>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-green-600 text-sm">
                            <i class="fas fa-arrow-up mr-1"></i>2 de plus qu'hier
                        </p>
                    </div>
                </div>

                <!-- Carte Patients en attente -->
                <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-orange-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Patients en Attente</p>
                            <h3 class="text-3xl font-bold text-gray-900 mt-2">3</h3>
                        </div>
                        <div class="bg-orange-100 p-3 rounded-full">
                            <i class="fas fa-user-clock text-orange-600 text-2xl"></i>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="text-orange-600 text-sm font-medium hover:text-orange-700">
                            Voir la liste <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Carte Messages non lus -->
                <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-purple-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Messages non lus</p>
                            <h3 class="text-3xl font-bold text-gray-900 mt-2">12</h3>
                        </div>
                        <div class="bg-purple-100 p-3 rounded-full">
                            <i class="fas fa-envelope text-purple-600 text-2xl"></i>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="text-purple-600 text-sm font-medium hover:text-purple-700">
                            Voir messages <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Carte Dossiers urgents -->
                <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-red-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Dossiers Urgents</p>
                            <h3 class="text-3xl font-bold text-gray-900 mt-2">2</h3>
                        </div>
                        <div class="bg-red-100 p-3 rounded-full">
                            <i class="fas fa-exclamation-triangle text-red-600 text-2xl"></i>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="text-red-600 text-sm font-medium hover:text-red-700">
                            Examiner <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Section Agenda du jour -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                            <h2 class="text-xl font-bold text-gray-900">
                                <i class="fas fa-calendar-alt text-blue-500 mr-2"></i> Agenda du Jour
                            </h2>
                            <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                Voir tout l'agenda <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                        <div class="p-6">
                            <!-- Consultation 1 -->
                            <div class="flex items-center p-4 mb-4 bg-blue-50 rounded-lg border-l-4 border-blue-500">
                                <div class="flex-shrink-0 bg-blue-100 text-blue-800 font-bold rounded-lg py-2 px-3 text-center">
                                    <p class="text-lg">09:00</p>
                                    <p class="text-xs">- 09:30</p>
                                </div>
                                <div class="ml-4 flex-1">
                                    <h4 class="font-semibold text-gray-900">Marie Dubois</h4>
                                    <p class="text-sm text-gray-600">Consultation de suivi - Hypertension</p>
                                    <div class="flex items-center mt-1">
                                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-1 rounded">Confirmé</span>
                                        <span class="ml-2 text-xs text-gray-500"><i class="fas fa-clock mr-1"></i>Dans 15 min</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <button class="text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Consultation 2 -->
                            <div class="flex items-center p-4 mb-4 bg-green-50 rounded-lg border-l-4 border-green-500">
                                <div class="flex-shrink-0 bg-green-100 text-green-800 font-bold rounded-lg py-2 px-3 text-center">
                                    <p class="text-lg">10:15</p>
                                    <p class="text-xs">- 10:45</p>
                                </div>
                                <div class="ml-4 flex-1">
                                    <h4 class="font-semibold text-gray-900">Pierre Lambert</h4>
                                    <p class="text-sm text-gray-600">Première consultation - Douleurs thoraciques</p>
                                    <div class="flex items-center mt-1">
                                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded">En attente</span>
                                        <span class="ml-2 text-xs text-gray-500"><i class="fas fa-file-medical mr-1"></i>Dossier à préparer</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <button class="text-green-600 hover:text-green-800">
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Consultation 3 -->
                            <div class="flex items-center p-4 bg-yellow-50 rounded-lg border-l-4 border-yellow-500">
                                <div class="flex-shrink-0 bg-yellow-100 text-yellow-800 font-bold rounded-lg py-2 px-3 text-center">
                                    <p class="text-lg">11:30</p>
                                    <p class="text-xs">- 12:00</p>
                                </div>
                                <div class="ml-4 flex-1">
                                    <h4 class="font-semibold text-gray-900">Sophie Moreau</h4>
                                    <p class="text-sm text-gray-600">Consultation annuelle - Suivi diabète</p>
                                    <div class="flex items-center mt-1">
                                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2 py-1 rounded">À confirmer</span>
                                        <span class="ml-2 text-xs text-gray-500"><i class="fas fa-phone mr-1"></i>À appeler</span>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <button class="text-yellow-600 hover:text-yellow-800">
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                            <button class="w-full text-center text-blue-600 hover:text-blue-800 font-medium py-2">
                                <i class="fas fa-plus mr-2"></i>Ajouter une consultation
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Section Actions Rapides -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h2 class="text-xl font-bold text-gray-900">
                                <i class="fas fa-bolt text-yellow-500 mr-2"></i> Actions Rapides
                            </h2>
                        </div>
                        <div class="p-6">
                            <div class="grid grid-cols-2 gap-4">
                                <!-- Action 1 -->
                                <a href="#" class="flex flex-col items-center justify-center p-4 bg-blue-50 hover:bg-blue-100 rounded-xl transition duration-300">
                                    <div class="bg-blue-100 p-3 rounded-full mb-3">
                                        <i class="fas fa-file-medical text-blue-600 text-2xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900 text-center">Nouveau Dossier</span>
                                </a>

                                <!-- Action 2 -->
                                <a href="#" class="flex flex-col items-center justify-center p-4 bg-green-50 hover:bg-green-100 rounded-xl transition duration-300">
                                    <div class="bg-green-100 p-3 rounded-full mb-3">
                                        <i class="fas fa-prescription text-green-600 text-2xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900 text-center">Rédiger Ordonnance</span>
                                </a>

                                <!-- Action 3 -->
                                <a href="#" class="flex flex-col items-center justify-center p-4 bg-purple-50 hover:bg-purple-100 rounded-xl transition duration-300">
                                    <div class="bg-purple-100 p-3 rounded-full mb-3">
                                        <i class="fas fa-vial text-purple-600 text-2xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900 text-center">Demander Analyses</span>
                                </a>

                                <!-- Action 4 -->
                                <a href="#" class="flex flex-col items-center justify-center p-4 bg-red-50 hover:bg-red-100 rounded-xl transition duration-300">
                                    <div class="bg-red-100 p-3 rounded-full mb-3">
                                        <i class="fas fa-ambulance text-red-600 text-2xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900 text-center">Urgence</span>
                                </a>

                                <!-- Action 5 -->
                                <a href="#" class="flex flex-col items-center justify-center p-4 bg-teal-50 hover:bg-teal-100 rounded-xl transition duration-300">
                                    <div class="bg-teal-100 p-3 rounded-full mb-3">
                                        <i class="fas fa-comment-medical text-teal-600 text-2xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900 text-center">Téléconsultation</span>
                                </a>

                                <!-- Action 6 -->
                                <a href="#" class="flex flex-col items-center justify-center p-4 bg-indigo-50 hover:bg-indigo-100 rounded-xl transition duration-300">
                                    <div class="bg-indigo-100 p-3 rounded-full mb-3">
                                        <i class="fas fa-chart-line text-indigo-600 text-2xl"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900 text-center">Statistiques</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Section Rappels -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden mt-8">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h2 class="text-xl font-bold text-gray-900">
                                <i class="fas fa-bell text-orange-500 mr-2"></i> Rappels Importants
                            </h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <!-- Rappel 1 -->
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <div class="h-8 w-8 rounded-full bg-red-100 flex items-center justify-center">
                                            <i class="fas fa-exclamation text-red-600 text-sm"></i>
                                        </div>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Renouvellement d'ordonnance</p>
                                        <p class="text-xs text-gray-500">Pour M. Durand - Expire dans 2 jours</p>
                                    </div>
                                </div>

                                <!-- Rappel 2 -->
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center">
                                            <i class="fas fa-microscope text-blue-600 text-sm"></i>
                                        </div>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Résultats d'analyses</p>
                                        <p class="text-xs text-gray-500">Disponibles pour 3 patients</p>
                                    </div>
                                </div>

                                <!-- Rappel 3 -->
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <div class="h-8 w-8 rounded-full bg-green-100 flex items-center justify-center">
                                            <i class="fas fa-calendar-check text-green-600 text-sm"></i>
                                        </div>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Formation continue</p>
                                        <p class="text-xs text-gray-500">Webinaire demain à 18h</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white border-t border-gray-200 mt-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <div class="flex items-center">
                            <i class="fas fa-heartbeat text-blue-600 text-2xl"></i>
                            <span class="ml-2 text-xl font-bold text-gray-900">E-Health<span class="text-blue-600">Pro</span></span>
                        </div>
                        <p class="text-gray-600 mt-2 text-sm">Plateforme de santé digitale sécurisée pour les professionnels de santé.</p>
                    </div>
                    <div class="grid grid-cols-2 gap-8 md:grid-cols-3">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-900 uppercase tracking-wider">Support</h3>
                            <ul class="mt-4 space-y-2">
                                <li><a href="#" class="text-gray-600 hover:text-blue-600 text-sm">Centre d'aide</a></li>
                                <li><a href="#" class="text-gray-600 hover:text-blue-600 text-sm">Contact technique</a></li>
                                <li><a href="#" class="text-gray-600 hover:text-blue-600 text-sm">FAQ</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-gray-900 uppercase tracking-wider">Légal</h3>
                            <ul class="mt-4 space-y-2">
                                <li><a href="#" class="text-gray-600 hover:text-blue-600 text-sm">Confidentialité</a></li>
                                <li><a href="#" class="text-gray-600 hover:text-blue-600 text-sm">Conditions d'utilisation</a></li>
                                <li><a href="#" class="text-gray-600 hover:text-blue-600 text-sm">RGPD</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-8 border-t border-gray-200 pt-8">
                    <p class="text-center text-gray-500 text-sm">&copy; 2023 E-HealthPro. Tous droits réservés.</p>
                </div>
            </div>
        </footer>
    </div>

</x-app-layout>

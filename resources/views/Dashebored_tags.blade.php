<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - Nostalogia</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 dark:bg-gray-900 flex min-h-screen">
    <aside class="bg-gray-800 text-white w-64 flex-shrink-0 hidden md:block">
        <div class="p-6 flex items-center space-x-2">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/retro-tv.png" alt="Logo Nostalgia" class="w-8 h-8">
            <span class="text-xl font-bold">Nostalogia Admin</span>
        </div>
        <div class="mt-6">
            <nav>
                <a href="admin-dashboard" class="block py-3 px-6 text-gray-300 hover:bg-gray-700 hover:text-white flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Tableau de bord
                </a>
                <a href="{{route('admin.users.index')}}" class="block py-3 px-6 text-gray-300 hover:bg-gray-700 hover:text-white flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    Utilisateurs
                </a>
                <a href="{{route('dashboard.products')}}" class="block py-3 px-6  text-white bg-gray-700  hover:text-white flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    Produits
                </a>
                <a href="{{ route('categories.show') }}" class="block py-3 px-6 text-gray-300 hover:bg-gray-700 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                    Catégories
                </a>
                <a href="{{route('tags.index')}}" class="block py-3 px-6 text-gray-300 hover:bg-gray-700 hover:text-white flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                    </svg>
                    Tags
                </a>
                <a href="{{ route('dashboard.articles') }}" class="block py-3 px-6 text-gray-300 hover:bg-gray-700 hover:text-white flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                    Articles Blog
                </a>
                <a href="{{route('dashboard.statistics')}}" class="block py-3 px-6 text-gray-300 hover:bg-gray-700 hover:text-white flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    Statistiques
                </a>
            </nav>
        </div>
        <div class="absolute bottom-0 w-64 p-6">
            <a href="/" class="block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md text-sm flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                </svg>
                Retour au site
            </a>
            <a href="/logout" class="mt-2 block py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md text-sm flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                Déconnexion
            </a>
        </div>
    </aside>
    <!-- Mobile menu button -->
    <div class="md:hidden absolute top-4 left-4 z-50">
        <button class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>

    <!-- Main Content -->
    <div class="flex-1 overflow-auto">
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Gestion des Tags</h1>
                <div class="flex items-center">
                    <div class="mr-4 text-right">
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Admin: Jean Dupont</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Administrateur</p>
                    </div>
                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Profile picture">
                </div>
            </div>
        </header>

        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <!-- Replace with your content -->
                <div class="px-4 py-6 sm:px-0">
                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow rounded-lg">
                            <div class="px-4 py-5 sm:p-6">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 bg-gray-600 rounded-md p-3">
                                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-5 w-0 flex-1">
                                        <dl>
                                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">
                                                Total des tags
                                            </dt>
                                            <dd>
                                                <div class="text-lg font-bold text-gray-900 dark:text-white">42</div>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow rounded-lg">
                            <div class="px-4 py-5 sm:p-6">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 bg-gray-600 rounded-md p-3">
                                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-5 w-0 flex-1">
                                        <dl>
                                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">
                                                Tags actifs
                                            </dt>
                                            <dd>
                                                <div class="text-lg font-bold text-gray-900 dark:text-white">38</div>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow rounded-lg">
                            <div class="px-4 py-5 sm:p-6">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 bg-gray-600 rounded-md p-3">
                                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-5 w-0 flex-1">
                                        <dl>
                                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">
                                                Produits avec tags
                                            </dt>
                                            <dd>
                                                <div class="text-lg font-bold text-gray-900 dark:text-white">156</div>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Erreur!</strong>
                        <span class="block sm:inline">{{ session('error') }}</span>
                    </div>
                    @endif

                    @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Succès!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                    @endif
                    <!-- Tags Actions -->
                    <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg mb-8">
                        <div class="px-4 py-5 sm:px-6 flex justify-between items-center">
                            <div>
                                <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">
                                    Gestion des tags
                                </h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-400">
                                    Créez et gérez les tags pour vos produits
                                </p>
                            </div>
                            <div class="flex space-x-3">
                                <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                    </svg>
                                    Import en masse
                                </button>
                                <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                    Nouveau tag
                                </button>
                            </div>
                        </div>

                        <!-- Search and Filter -->
                        <div class="px-4 py-5 bg-gray-50 dark:bg-gray-700 sm:px-6">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                <div class="w-full md:w-1/3 mb-4 md:mb-0">
                                    <label for="search" class="sr-only">Rechercher</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </div>
                                        <input id="search" name="search" type="search" class="block w-full pl-10 pr-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md leading-5 bg-white dark:bg-gray-800 placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-gray-500 focus:border-gray-500 sm:text-sm" placeholder="Rechercher un tag...">
                                    </div>
                                </div>
                                <div class="flex flex-col md:flex-row md:items-center space-y-2 md:space-y-0 md:space-x-4">
                                    <select class="block w-full py-2 px-3 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                                        <option value="">Tous les statuts</option>
                                        <option value="active">Actif</option>
                                        <option value="inactive">Inactif</option>
                                    </select>
                                    <select class="block w-full py-2 px-3 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                                        <option value="10">10 par page</option>
                                        <option value="25">25 par page</option>
                                        <option value="50">50 par page</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Tags Table -->
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            {{" "}}
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Nom du tag
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Produits associés
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Date de création
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach ($tags as $tag)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="h-10 w-10 flex-shrink-0 rounded-full flex items-center justify-center bg-gray-200 dark:bg-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                                    </svg>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900 dark:text-white">
                                                        {{$tag->name}}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                            {{ $tag->total_count }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                            {{ $tag->created_at }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <button onclick="openEditForm(this)" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300" data-id="{{ $tag->id }}" data-name="{{ $tag->name }}" data-img="{{ $tag->image }}">Modifier</button>
                                            <span class="text-gray-500 dark:text-gray-400 px-2">|</span>
                                            {{--<form action="{{ route('tag.destroy', ['id' => $tag->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">Supprimer</button>
                                            </form>--}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Edit Tag Form Modal -->
                        <div class="fixed z-10 inset-0 overflow-y-auto hidden" id="EditTagFormModal">
                            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                <!-- Background overlay -->
                                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                                    <div class="absolute inset-0 bg-gray-500 dark:bg-gray-900 opacity-75"></div>
                                </div>
                                <!-- Modal panel -->
                                <div class="inline-block align-bottom bg-white dark:bg-gray-800 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                    <div class="bg-white dark:bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                        <div class="sm:flex sm:items-start">
                                            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 dark:bg-blue-900 sm:mx-0 sm:h-10 sm:w-10">
                                                <svg class="h-6 w-6 text-blue-600 dark:text-blue-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </div>
                                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                                                <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white" id="modal-title">
                                                    Modifier le tag
                                                </h3>
                                                <div class="mt-4">
                                                    <form id="editTagForm" action="" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="tag_id" id="editTagId">
                                                        <div>
                                                            <label for="EditTagName" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nom du tag</label>
                                                            <input type="text" name="name" id="EditTagName" class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                                                        </div>
                                                        <div class="mt-4">
                                                            <label for="editImagePreview" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Image</label>
                                                            <img id="editImagePreview" src="" alt="Preview" class="mt-2 w-20 h-20">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                        <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm" id="saveTagButton">
                                            Enregistrer
                                        </button>
                                        <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 dark:border-gray-600 shadow-sm px-4 py-2 bg-white dark:bg-gray-800 text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" id="cancelEditButton">
                                            Annuler
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Create Tag Form Modal -->
                        <div class="fixed z-10 inset-0 overflow-y-auto hidden" id="createTagFormModal">
                            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                <!-- Background overlay -->
                                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                                    <div class="absolute inset-0 bg-gray-500 dark:bg-gray-900 opacity-75"></div>
                                </div>
                                <!-- Modal panel -->
                                <div class="inline-block align-bottom bg-white dark:bg-gray-800 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                    <div class="bg-white dark:bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                        <div class="sm:flex sm:items-start">
                                            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 dark:bg-green-900 sm:mx-0 sm:h-10 sm:w-10">
                                                <svg class="h-6 w-6 text-green-600 dark:text-green-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                </svg>
                                            </div>
                                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                                                <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white" id="modal-title">
                                                    Créer un nouveau tag
                                                </h3>
                                                <div class="mt-4">
                                                    <form id="createTagForm" method="POST" action="{{ route('tags.store') }}">
                                                        @csrf
                                                        <div>
                                                            <label for="createTagName" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nom du tag</label>
                                                            <input type="text" name="name" id="createTagName" class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm" required>
                                                        </div>
                                                        <div class="mt-4">
                                                            <label for="createTagStatus" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Statut</label>
                                                            <select id="createTagStatus" name="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                                                                <option value="active">Actif</option>
                                                                <option value="inactive">Inactif</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                        <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm" id="createTagButton">
                                            Créer
                                        </button>
                                        <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 dark:border-gray-600 shadow-sm px-4 py-2 bg-white dark:bg-gray-800 text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" id="cancelCreateButton">
                                            Annuler
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination -->
                        {{ $tags->links() }}
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- JavaScript pour les modals et les formulaires -->
    <script>
        // Variables pour les modals
        const editTagFormModal = document.getElementById('EditTagFormModal');
        const createTagFormModal = document.getElementById('createTagFormModal');

        // Variables pour les formulaires d'édition
        const editTagForm = document.getElementById('editTagForm');
        const editTagId = document.getElementById('editTagId');
        const editTagName = document.getElementById('EditTagName');
        const saveTagButton = document.getElementById('saveTagButton');
        const cancelEditButton = document.getElementById('cancelEditButton');

        // Variables pour les formulaires de création
        const newTagButton = document.querySelector('button[class*="bg-blue-600"]');
        const createTagForm = document.getElementById('createTagForm');
        const createTagButton = document.getElementById('createTagButton');
        const cancelCreateButton = document.getElementById('cancelCreateButton');

        // Fonction pour ouvrir le formulaire d'édition de tag
        function openEditForm(button) {
            const modalEdit = document.getElementById('EditTagFormModal');
            modalEdit.classList.remove('hidden');

            const tagId = button.getAttribute('data-id');
            const name = button.getAttribute('data-name');
            const image = button.getAttribute('data-img');

            // Set the form action URL with the tag ID
            const form = document.getElementById('editTagForm');
            form.action = `/Dashebored/tags/${tagId}`;

            document.getElementById('editTagId').value = tagId;
            document.getElementById('EditTagName').value = name;
            document.getElementById('editImagePreview').src = image;
        }

        // Gestionnaire d'événement pour le bouton Annuler (édition)
        cancelEditButton.addEventListener('click', function() {
            editTagFormModal.classList.add('hidden');
        });

        // Gestionnaire d'événement pour le bouton Enregistrer
        saveTagButton.addEventListener('click', function() {
            editTagForm.submit();
        });

        // Gestionnaire d'événement pour le bouton Nouveau tag
        newTagButton.addEventListener('click', function() {
            createTagFormModal.classList.remove('hidden');
        });

        // Gestionnaire d'événement pour le bouton Annuler (création)
        cancelCreateButton.addEventListener('click', function() {
            createTagFormModal.classList.add('hidden');
        });

        // Gestionnaire d'événement pour le bouton Créer
        createTagButton.addEventListener('click', function() {
            createTagForm.submit();
        });

        // Gestion de la fermeture des modals en cliquant à l'extérieur
        window.addEventListener('click', function(event) {
            if (event.target === editTagFormModal) {
                editTagFormModal.classList.add('hidden');
            }
            if (event.target === createTagFormModal) {
                createTagFormModal.classList.add('hidden');
            }
        });

        // Gestion du menu mobile
        const mobileMenuButton = document.querySelector('.md\\:hidden button');
        const sidebar = document.querySelector('aside');

        mobileMenuButton.addEventListener('click', function() {
            sidebar.classList.toggle('hidden');
            sidebar.classList.toggle('fixed');
            sidebar.classList.toggle('inset-0');
            sidebar.classList.toggle('z-40');
        });
    </script>

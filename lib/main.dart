import 'package:belajar_drawer/pages/homepage.dart';
import 'package:belajar_drawer/pages/profile_page.dart';
import 'package:belajar_drawer/pages/settings_page.dart';
import 'package:belajar_drawer/theme.dart';
import 'package:flutter/material.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: "Chat App",
      debugShowCheckedModeBanner: false,
      theme: appTheme,
      routes: {
        '/': (context) => const HomePage(),
        '/profile': (context) => const ProfilePage(),
        '/settings': (context) => const SettingsPage(),
      },
    );
  }
}

import 'package:belajar_drawer/pages/courses_page.dart';
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
      title: "Belajar Drawer",
      debugShowCheckedModeBanner: false,
      theme: appTheme,
      routes: {
        '/': (context) => HomePage(),
        '/profile': (context) => ProfilePage(),
        '/courses': (context) => CoursesPage(),
        '/settings': (context) => SettingsPage(),
      },
    ); // // MaterialApp
  }
}

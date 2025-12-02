import 'package:belajar_drawer/widget/app_drawer.dart';
import 'package:flutter/material.dart';

class CoursesPage extends StatelessWidget {
  const CoursesPage({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      drawer: AppDrawer(),
      appBar: AppBar(title: Text("Halaman Courses")),
      body: Center(child: Text("Ini adalah halaman Courses")),
    );
  }
}

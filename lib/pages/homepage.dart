import 'package:belajar_drawer/widget/app_drawer.dart';
import 'package:flutter/material.dart';

class HomePage extends StatelessWidget {
  const HomePage({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      drawer: AppDrawer(),
      appBar: AppBar(title: Text("Halaman Home")),
      body: Center(child: Text("Ini adalah halaman home")),
    );
  }
}